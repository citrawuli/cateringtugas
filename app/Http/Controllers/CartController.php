<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog;
use App\Models\produk;
use App\Models\Pemesanan;
use App\Models\detail_transaksi;
use Illuminate\Support\Facades\DB;
use Session;
use Redirect;
use Auth;
use Carbon\Carbon;

class CartController extends Controller
{
    /**
     * Create a new controller instance.
     * ini digunakan supaya langsung diarahkan ke login page
     * jadi semua fungsi di bawah ini kalau mau dijalankan wajib ke middleware dulu
     * kalau nggak mau gitu, ya dicomment aja okay :)
     * jadi kalau beli produk, mending pakai... constructor baru... hmmm correct :)
     * @return void
     */
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addToCart($id)
    {
        $produk = produk::findOrFail($id);
        
        $cart = session()->get('cart', []);
  
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "idpro" => $produk->id,
                "name" => $produk->nama_produk,
                "quantity" => 1,
                "price" => $produk->harga_produk,
                "image" => $produk->images,
            ];
        }
          
        session()->put('cart', $cart);
        Session::flash('message', "Produk $produk->nama_produk sukses ditambahkan ke keranjang!");
        return Redirect::back();
    }

    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('message', "Keranjang belanja sukses diperbarui Qty: $request->quantity");
        }
    }
  
    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('message', 'Produk berhasil dihapus dari keranjang!');
        }
    }

    public function keranjangBelanja()
    {
        $produk = produk::
        join('kategori_produk','kategori_produk.id','=','produk.id_kategori')
        ->select('kategori_produk.nama_kategori','produk.*')
        ->whereNull('produk.deleted_at')->get();
        // $galpro = DB::table('galeri_produk')->whereNull('galeri_produk.deleted_at')->get();
        return view('layouts.cartpage', compact('produk'));
    }

    public function checkoutprod()
    {
        $produk = produk::
        join('kategori_produk','kategori_produk.id','=','produk.id_kategori')
        ->select('kategori_produk.nama_kategori','produk.*')
        ->whereNull('produk.deleted_at')->get();
        return view('layouts.checkoutpage',compact('produk'));
    }

    public function storecheckout(Request $request)
    {
        
        $validator = $request->validate([
            'cariuser' => ['required', 'max:35'],
            'nomor_telp' => ['required', 'max:13'],
            'optionkirim' => ['required'],
            'untuk_jam'=>['required'],
            'untuk_tanggal' => ['required'],
            'alamat_lengkap' => ['max:100'],
            'keterangan' => ['max:200'],
        ],
        [
            'cariuser.required' => 'Nama harus diisi',
            'nomor_telp.required' => 'Nomor ponsel harus diisi',
            'optionkirim.required' => 'Metode pengambilan harus diisi',
            'untuk_tanggal.required' => 'Untuk tanggal harus diisi',
            'untuk_jam.required' => 'Untuk jam harus diisi',
            'cariuser.max' => 'Nama harus dibawah 35 karakter',
            'nomor_telp.max' => 'Nomor ponsel harus dibawah 13 karakter',
            'alamat_lengkap.max' => 'Alamat pengiriman harus dibawah 100 karakter ',
            'keterangan.max' => 'Keterangan harus dibawah 200 karakter',
            ]
        );
        
        // // dd($request->all());
        
        $a=Carbon::parse($request->input('untuk_tanggal'));
        if (Carbon::now() >= $a){
            $tgl  = $a->addYear();
        } else {
            $tgl  = $a;
        }

        $ord = Pemesanan::create([
            'user_id' =>  Auth::user()->id,
            'nama_lengkap_pembeli'  =>  $request->cariuser,
            'no_hp_pembeli' =>  $request->nomor_telp,
            'alamat_lengkap_pembeli' =>  $request->alamat_lengkap,
            'untuk_tanggal' =>  $tgl,
            'untuk_jam' =>  $request->untuk_jam,
            'pengambilan' =>  $request->optionkirim,
            'keterangan' =>  $request->keterangan,
            // 'discount' =>  $b,
            // 'discount_inpercent' =>  $request->percent_off,
            'total_transaksi' =>  $request->product_total,
            'total_sub' =>  $request->sub_total_todb,
            'status_pemesanan' =>  "1",
            'status_progress' =>  "1",
            'created_at' => \Carbon\Carbon::now(), 
            'updated_at' => \Carbon\Carbon::now(), 
        ]);
        // // dd($request->all());
        $lastId = Pemesanan::latest()->first()->id_pemesanan;

        $cart = session()->get('cart');
        foreach ($cart as $carts) {
            $sub_totals = $carts['price'] * $carts['quantity'];
            $qty = $carts['quantity'];
            $idpro = $carts['idpro'];
            if ($carts!= '') {
                $detail = new detail_transaksi;
                $detail->id_pemesanan = $lastId;
                $detail->id_produk = $idpro; 
                $detail->kuantitas = $qty;
                $detail->sub_total = $sub_totals;
                $detail->touch();
                $detail->save();
            }
        }
        session()->forget('cart');
       
        Session::flash('message', 'Terimakasih, data orderan berhasil ditambahkan! <br><br>
        Mohon <a href="'. url('/seeyourorder').'"><strong>klik disini </strong></a>untuk mengecek histori pemesanan pada <a href="'.url('/login').'"><strong>akun Anda </strong></a>dan melihat status pemesanan. 
        Admin kami akan menghubungi Anda pada nomor ponsel tertera untuk mengonfirmasi pemesanan.');
        return Redirect::back();
    }


    
   
}
