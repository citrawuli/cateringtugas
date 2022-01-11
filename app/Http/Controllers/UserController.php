<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Session;
use Redirect;
use Auth;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Pemesanan;
use App\Models\Pembayaran;

class UserController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index()
    {
        if (request()->user()->hasRole('user')) {
            return view('viewUser.homeUser');
        } else {
            return redirect('/');
        } 
    }

    public function edityourprofile()
    {
        // $id = auth()->user()->id;
        // $user = DB::table('users')->where('users.id', $id)
        //         ->whereNull('deleted_at')->first();
        return view('viewUser.editUserProfile');
                
    }

    public function updateyouruprofile(Request $request,$id)
    {
        $user = auth()->user();
        // dd($request->all(),$user->password);
        $validated = $request->validate([
            'current_password' => [    
                'sometimes', 'nullable',   'required_with:new_password',        
                function ($attribute, $value, $fail) use ($user) {
                    if (!Hash::check($value, $user->password)) {
                        $fail('Mohon memasukkan password lama yang benar');
                        // dd($request->all(),$user->password);
                    }
                }
            ],
            'new_password' => [
                'sometimes', 'nullable', 'min:8', 'different:current_password','required_with:current_password'
            ],
            'name' => ['required','nullable', 'string', 'max:50'],
            'alamat_lengkap' => ['sometimes','nullable', 'string', 'max:100'],
            'nomor_telp' => ['sometimes','nullable', 'string', 'max:13'],
            'email' => ['required','nullable', 'string', 'email', 'max:50', 'unique:users,email,'.$user->id.',id'],
        ],
        [
            'new_password.different' => 'Password baru harus berbeda dengan password lama',
            'new_password.min' => 'Password baru harus memiliki 8 karakter',
            'new_password.required_with' => 'Anda perlu mengisi kolom Password Baru jika mengisi kolom Password Lama',
            'current_password.required_with' => 'Anda perlu mengisi kolom Password Lama jika mengisi kolom Password Baru',
            'name.max' => 'Nama maksimal 50 karakter',
            'alamat_lengkap.max' => 'Alamat lengkap maksimal 100 karakter',
            'nomor_telp.max' => 'Nomor Telepon maksimal 13 karakter',
            'email.unique' => 'Email ini sudah ada',
        ]
        );

        $model = user::find($id);
        $model->name = $request->input('name');
        $model->email = $request->input('email');
        $model->alamat_user = $request->input('alamat_lengkap');
        $model->ponsel_user = $request->input('nomor_telp');
        $model->password = Hash::make($request->input('new_password'));
        $model->touch();
        $model->save();
        Session::flash('message', "Data profil pengguna berhasil diubah");
        return Redirect::back();
    }

    public function seeyourorder()
    {
        $id=Auth::user()->id;
        $totalpemesanan = Pemesanan::with(['products'])->where('user_id', '=', $id)
            ->whereNull('pemesanan.deleted_at')->get()->count('id_pemesanan');
        $pemesanan = Pemesanan::with(['products'])->where('user_id', '=', $id)
            ->whereNull('pemesanan.deleted_at')->latest()->paginate(12);
        $newpemesanan = Pemesanan::with(['products'])->where('user_id', '=', $id)->whereNull('pemesanan.deleted_at')
            ->orderBy('pemesanan.created_at', 'desc')->take(1)->get();
        return view('viewUser.seeyourorder', compact('totalpemesanan', 'pemesanan','newpemesanan'));
    }

    public function seeyourdetailorder($id)
    {
        $pemesanan = Pemesanan::with(['products'])
            ->where('pemesanan.id_pemesanan', '=', $id)->whereNull('pemesanan.deleted_at')->get();
        $bayar = Pembayaran::with('detpems')
            ->where('pembayaran.id_pemesanan', $id)->whereNull('pembayaran.deleted_at')->get();
        $jumlahSudahBayar = Pembayaran::with('detpems')
            ->where('pembayaran.id_pemesanan', $id)->where('status_bayar', '1')->whereNull('pembayaran.deleted_at')->get()->sum('jumlah_bayar');
        $countbayar = Pembayaran::with('detpems')
            ->where('pembayaran.id_pemesanan', $id)->whereNull('pembayaran.deleted_at')->get()->count('id_pembayaran');
        $produk = DB::table('produk')->get();
        $category = DB::table('kategori_produk')->get();
        $galpro = DB::table('galeri_produk')->get();
        return view('viewUser.seeyourorderdetail', compact('pemesanan', 'bayar', 'jumlahSudahBayar', 'produk', 'category', 'galpro','countbayar'));
    }

    public function edityourdetailorder($id)
    {
        $pemesanan = Pemesanan::with(['products'])
            ->where('pemesanan.id_pemesanan', '=', $id)->whereNull('pemesanan.deleted_at')->get();
        $pemid=$id;
        return view('viewUser.edityourdetailorder', compact('pemesanan','pemid'));
    }

    public function edityourpayment($id)
    {
        $pembayaran = Pembayaran::where('pembayaran.id_pembayaran', '=', $id)->whereNull('pembayaran.deleted_at')->get();
        $pemid=$id;
        return view('viewUser.edityourpayment', compact('pembayaran','pemid'));
    }


    public function updateyourdetailorder(Request $request, $id)
    {
        $a=Carbon::parse($request->input('untuk_tanggal'));
        if (Carbon::now() >= $a){
            $tgl  = $a->addYear();
        } else {
            $tgl  = $a;
        }
        $model = Pemesanan::find($id);
        $model->nama_lengkap_pembeli = $request->input('cariuser');
        $model->no_hp_pembeli = $request->input('nomor_telp');
        $model->alamat_lengkap_pembeli = $request->input('alamat_lengkap');
        $model->untuk_tanggal = $tgl;
        $model->untuk_jam = $request->input('untuk_jam');
        $model->pengambilan = $request->input('optionkirim');
        $model->keterangan = $request->input('keterangan');
        $model->touch();
        $model->save();
        Session::flash('message', "Data Pemesanan berhasil diubah");
        return Redirect::back();
    }

    public function updateyourpayment(Request $request, $id)
    {
        $a=Carbon::parse($request->input('tanggal_bayar'));
        if (Carbon::now() >= $a){
            $tgl  = $a->addYear();
        } else {
            $tgl  = $a;
        }

        $buktiPath="";
        if($request->hasFile('file')){
            $bukti=$request->file('file');
            //dd($request->all());
            $buktiname=time(). '-'.$bukti->getClientOriginalName();
            $bukti->move(public_path('bukti'),$buktiname);
            $buktiPath= "/bukti/$buktiname";

            // $first_file=Pembayaran::select('bukti_bayar')->where('id_pembayaran', $id)->get();
            // // dd($first_file);
            // if($first_file){
            //     \File::delete(public_path($first_file));
            // }
        }

        $bank="";
        if($request->optionbank == 4){
            $bank=strtoupper($request->lainnya);
        }
        elseif($request->optionbank != 4){
            $bank=$request->optionbank;
        }
        
        $model = Pembayaran::find($id);
        $model->jumlah_bayar = $request->input('jumlah_bayar');
        $model->tanggal_pembayaran = $tgl;
        $model->bank_transfer =  $bank;
        $model->atas_nama =$request->input('atas_nama');
        $model->bukti_bayar = $buktiPath;
        $model->nomor_rekening = $request->input('no_rek');
        $model->touch();
        $model->save();
        Session::flash('message', "Data pembayaran berhasil diubah");
        return Redirect::back();
    }

    public function seeyourpayment()
    {
        $id=Auth::user()->id;
        $bayar = User::rightJoin('pemesanan', 'pemesanan.user_id', '=', 'users.id')
        ->rightJoin('pembayaran','pemesanan.id_pemesanan', '=', 'pembayaran.id_pemesanan')
        ->whereNull('pembayaran.deleted_at')
        ->where('users.id', '=', $id)->orderBy('pembayaran.created_at', 'desc')->paginate(12);
        $countbayar = $bayar->count('id_pembayaran');
        return view('viewUser.seeyourpayment', compact('bayar', 'countbayar'));
    }

    public function cancelyourorder($id)
    {
        $model = Pemesanan::find($id);
        $model->status_pemesanan=4;
        $model->touch();
        $model->save();
        Session::flash('message', "Anda sudah membatalkan pemesanan ini");
        return Redirect::back();
    }

    public function addyourpayment($id)
    {
        $pemesanan = Pemesanan::find($id);
        $pemesanan_id=$id;
        return view('viewUser.addyourpayment', compact('pemesanan','pemesanan_id'));
    }

    public function storeyourpayment(Request $request, $id)
    {
        $validator = $request->validate([
            'id_pemesanan' => ['required'],
            'jumlah_bayar' => ['required'],
            'optionbank' => ['required'],
            'tanggal_bayar' => ['required'],
            'atas_nama' => ['required','max:50'],
            'no_rek' => ['required','max:20'],
            'file' => ['required','mimes:jpg,jpeg'],
        ],
        [
            'id_pemesanan.required' => 'Mohon memilih id pemesanan',
            'jumlah_bayar.required' => 'Mohon mengisi jumlah bayar',
            'optionbank.required' => 'Mohon memilih bank transfer',
            'nomor_rekening.required' => 'Mohon mengisi nomor rekening',
            'tanggal_bayar.required' => 'Mohon mengisi tanggal bayar tertera pada bukti bayar',
            'file.required' => 'Mohon melampirkan bukti bayar',
            'atas_nama.max' => 'Atas Nama harus dibawah 50 karakter',
            'no_rek.max' => 'Nomor Rekening harus dibawah 20 karakter',  
            'file.mimes' => 'Mohon memilih file gambar .jpg atau .png',          
        ]
        );
        $buktiPath="";
        if($request->hasFile('file')){
            $bukti=$request->file('file');
            //dd($request->all());
            $buktiname=time(). '-'.$bukti->getClientOriginalName();
            $bukti->move(public_path('bukti'),$buktiname);
            $buktiPath= "/bukti/$buktiname";
    
        }
        $bank="";
        if($request->optionbank == 4){
            $bank=strtoupper($request->lainnya);
        }
        elseif($request->optionbank != 4){
            $bank=$request->optionbank;
        }
        $tgl=Carbon::parse($request->input('tanggal_bayar'));
        Pembayaran::create([
            'id_pemesanan' => $request->id_pemesanan,
            'jumlah_bayar' => $request->jumlah_bayar,
            'tanggal_pembayaran' => $tgl,
            'bank_transfer' => $bank,
            'atas_nama' => $request->atas_nama,
            'status_bayar' => '0',
            'bukti_bayar' => $buktiPath,
            'nomor_rekening' => $request->no_rek,
            'created_at' => \Carbon\Carbon::now(), 
            'updated_at' => \Carbon\Carbon::now(), 
        ]);

        Session::flash('message', "Data pembayaran berhasil ditambahkan");
        return Redirect::back();
    }
}
