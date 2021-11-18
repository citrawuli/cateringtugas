<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog;
use App\Models\produk;
use Illuminate\Support\Facades\DB;
use Session;
use Redirect;

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
        $galpro = DB::table('galeri_produk')->whereNull('galeri_produk.deleted_at')->get();
        return view('layouts.checkoutpage',compact('galpro','produk'));
    }


    
   
}
