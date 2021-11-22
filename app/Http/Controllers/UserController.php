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
                'sometimes', 'nullable',           
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
            'nomor_telp' => ['sometimes','nullable', 'string', 'max:15'],
            'email' => ['required','nullable', 'string', 'email', 'max:50', 'unique:users,email,'.$user->id.',id'],
        ],
        [
            'new_password.different' => 'Password baru harus berbeda dengan password lama',
            'new_password.min' => 'Password baru harus memiliki 8 karakter',
            'new_password.required_with' => 'Anda perlu mengisi kolom Password Baru jika mengisi kolom Password Lama',
            'name.max' => 'Nama maksimal 50 karakter',
            'alamat_lengkap.max' => 'Alamat lengkap maksimal 100 karakter',
            'nomor_telp.max' => 'Nomor Telepon maksimal 15 karakter',
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
        
        $produk = DB::table('produk')->get();
        $category = DB::table('kategori_produk')->get();
        $galpro = DB::table('galeri_produk')->get();
        return view('viewUser.seeyourorderdetail', compact('pemesanan', 'bayar', 'jumlahSudahBayar', 'produk', 'category', 'galpro'));
    }

    public function edityourdetailorder($id)
    {
        $pemesanan = Pemesanan::with(['products'])
            ->where('pemesanan.id_pemesanan', '=', $id)->whereNull('pemesanan.deleted_at')->get();
        $pemid=$id;
        return view('viewUser.edityourdetailorder', compact('pemesanan','pemid'));
    }

    public function updateyourdetailorder(Request $request, $id)
    {
        $a=Carbon::parse($request->input('untuk_tanggal'));
        $model = Pemesanan::find($id);
        $model->nama_lengkap_pembeli = $request->input('cariuser');
        $model->no_hp_pembeli = $request->input('nomor_telp');
        $model->alamat_lengkap_pembeli = $request->input('alamat_lengkap');
        $model->untuk_tanggal = $a;
        $model->untuk_jam = $request->input('untuk_jam');
        $model->pengambilan = $request->input('optionkirim');
        $model->keterangan = $request->input('keterangan');
        $model->touch();
        $model->save();
        Session::flash('message', "Data Pemesanan pengguna berhasil diubah");
        return Redirect::back();
    }

    public function seeyourpayment()
    {
        $id=Auth::user()->id;
        $bayar = User::rightJoin('pemesanan', 'pemesanan.user_id', '=', 'users.id')
        ->rightJoin('pembayaran','pemesanan.id_pemesanan', '=', 'pembayaran.id_pemesanan')
        ->whereNull('pembayaran.deleted_at')
        ->where('users.id', '=', $id)->orderBy('pembayaran.created_at', 'desc')->paginate(12);
        return view('viewUser.seeyourpayment', compact('bayar'));
    }
}
