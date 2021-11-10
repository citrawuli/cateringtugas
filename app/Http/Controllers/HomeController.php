<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog;
use App\Models\produk;
use App\Models\kategoriProduk;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     * ini digunakan supaya langsung diarahkan ke login page
     * jadi semua fungsi di bawah ini kalau mau dijalankan wajib ke middleware dulu
     * kalau nggak mau gitu, ya dicomment aja okay :)
     * jadi kalau beli produk, mending pakai... constructor baru... hmmm correct :)
     * @return void
     */
    
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     return view('home');
    // }

    public function index(Request $request)
    {
  
        if ($request->user()->hasRole('user')) {
            return redirect('/user');
        }

        if ($request->user()->hasRole('adminPemesanan')){
            return redirect('/adminPemesanan');
        }

        if ($request->user()->hasRole('adminPembayaran')){
            return redirect('/adminPembayaran');
        }
 
        if ($request->user()->hasRole('superAdmin')){
            return redirect('/superAdmin');
        }
 
 
    }

    public function mainCatalogue()
    {
        $blog = Blog::
        join('users', 'blogs.user_id', '=', 'users.id')
        ->leftJoin('role_users', 'users.id', '=', 'role_users.user_id')
        ->leftJoin('roles', 'role_users.role_id', '=', 'roles.id')
        ->select('blogs.*', 'users.name','role_name')
        ->whereNull('blogs.deleted_at')->orderBy('created_at', 'DESC')->paginate(10);
        
        \DB::statement("SET SQL_MODE=''");//this is the trick use it just before your query
        //supaya gak kena error pas selectRaw all product dan cuma bisa sum doang :D
        $bestpro = Produk::
        join('detail_transaksi', 'detail_transaksi.id_produk', '=', 'produk.id')
        ->selectRaw('SUM(detail_transaksi.kuantitas) AS dipesanSebanyak, produk.*')
        ->whereNull('produk.deleted_at')
        ->groupBy(['produk.id']) // should group by primary key
        ->orderByDesc('dipesanSebanyak')
        ->take(8) // 8 best-selling products
        ->get();
        // dd($bestpro);
        $kategori=kategoriProduk::get();
        
        $newarrival = produk::join('kategori_produk','kategori_produk.id','=','produk.id_kategori')
        ->select('kategori_produk.*','produk.*')->whereNull('produk.deleted_at')->orderBy('produk.created_at', 'desc')->take(8)->get();
        $produk = DB::table('produk')->whereNull('produk.deleted_at')->get();
        $galpro = DB::table('galeri_produk')->whereNull('galeri_produk.deleted_at')->get();


        return view('viewUser.mainCatalogue', compact('blog', 'bestpro', 'produk', 'galpro','newarrival','kategori')); 
    }

    public function gridprodTable()
    {
        $produk = produk::
        join('kategori_produk','kategori_produk.id','=','produk.id_kategori')
        ->select('kategori_produk.nama_kategori','produk.*')
        ->whereNull('produk.deleted_at')->orderBy('produk.created_at', 'desc')->paginate(12);
        
        
        $galpro = DB::table('galeri_produk')->whereNull('galeri_produk.deleted_at')->get();
        $newarrival = DB::table('produk')->whereNull('produk.deleted_at')->latest()->take(8)->get();

        return view('layouts.gridproducttable', compact('produk', 'galpro', 'newarrival')); 
    }

    public function lihatproduk($id)
    {
        $produk = produk::
        join('kategori_produk','kategori_produk.id','=','produk.id_kategori')
        ->select('kategori_produk.nama_kategori','produk.*')
        ->where('produk.id',$id)->get();
        
        $galpro = DB::table('galeri_produk')->whereNull('galeri_produk.deleted_at')->get();
        return view('layouts.viewproduct', compact('produk', 'galpro')); 
    }
   
}
