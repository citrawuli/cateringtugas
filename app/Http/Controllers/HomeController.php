<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog;
use App\Models\produk;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

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
        
        $newarrival = DB::table('produk')->latest()->take(8)->get();
        $produk = DB::table('produk')->get();
        $galpro = DB::table('galeri_produk')->get();


        return view('viewUser.mainCatalogue', compact('blog', 'bestpro', 'produk', 'galpro','newarrival')); 
    }

   
}
