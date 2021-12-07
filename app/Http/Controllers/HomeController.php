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

    public function filterproduct(Request $request)
    {
        // dd($request->all());
        
        $produk =  produk::
        join('kategori_produk','kategori_produk.id','=','produk.id_kategori')
        ->select('kategori_produk.nama_kategori','produk.*')
        ->whereNull('produk.deleted_at')->paginate(12);
        // dd($request->filter);
        if($request->filter=='renting'){
            $produk = produk::
            join('kategori_produk','kategori_produk.id','=','produk.id_kategori')
            ->select('kategori_produk.nama_kategori','produk.*')
            ->whereNull('produk.deleted_at')->orderBy('produk.harga_produk', 'asc')->paginate(12);
            $produk->setPath('filterproduct?filter=renting'); 
            //alhamdulillah nemu di dokumentasi :)) dan gak ada di stackoverflow 
            //namanya custom URI yaw, coba diilangin yang line setpath, 
            //gak bisa di page 2 dsb soalnya pagination URI jadi gak match 
            
        }
        elseif($request->filter=='tingren'){
            $produk = produk::
            join('kategori_produk','kategori_produk.id','=','produk.id_kategori')
            ->select('kategori_produk.nama_kategori','produk.*')
            ->whereNull('produk.deleted_at')->orderBy('produk.harga_produk', 'desc')->paginate(12);
            $produk->setPath('filterproduct?filter=tingren');
        }
        elseif($request->filter=='newarr'){
            $produk = produk::
            join('kategori_produk','kategori_produk.id','=','produk.id_kategori')
            ->select('kategori_produk.nama_kategori','produk.*')
            ->whereNull('produk.deleted_at')->orderBy('produk.created_at', 'desc')->paginate(12);
            $produk->setPath('filterproduct?filter=newarr');
        }
       
        $galpro = DB::table('galeri_produk')->whereNull('galeri_produk.deleted_at')->get();
        $newarrival = DB::table('produk')->whereNull('produk.deleted_at')->latest()->take(8)->get();

        return view('layouts.gridproducttable', compact('produk', 'galpro', 'newarrival')); 
    }



    public function searchproduct(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;
        
        $produk = produk::
        join('kategori_produk','kategori_produk.id','=','produk.id_kategori')
        ->select('kategori_produk.nama_kategori','produk.*')
        ->where('nama_produk','like',"%".$cari."%")// mengambil data dari table produk sesuai pencarian data
        ->orWhere('tipe_produk', 'LIKE', "%{$cari}%") 
        ->whereNull('produk.deleted_at')->orderBy('produk.created_at', 'desc')
        ->paginate(12);        
        
        $galpro = DB::table('galeri_produk')->whereNull('galeri_produk.deleted_at')->get();
        $newarrival = DB::table('produk')->whereNull('produk.deleted_at')->latest()->take(8)->get();

        return view('layouts.searchproduct', compact('produk', 'galpro', 'newarrival')); 
    }

    public function lihatproduk($id)
    {
        $produk = produk::
        join('kategori_produk','kategori_produk.id','=','produk.id_kategori')
        ->select('kategori_produk.nama_kategori','produk.*')
        ->where('produk.id',$id)->get();
        
        $galpro = DB::table('galeri_produk')
        ->leftJoin('produk','galeri_produk.id_produk', '=','produk.id')
        ->whereNull('galeri_produk.deleted_at')->get();

        return view('layouts.viewproduct', compact('produk', 'galpro')); 
    }

    public function blog()
    {
        $blog = DB::table('blogs')
        ->join('users', 'blogs.user_id', '=', 'users.id')
        ->leftJoin('role_users', 'users.id', '=', 'role_users.user_id')
        ->leftJoin('roles', 'role_users.role_id', '=', 'roles.id')
        ->select('blogs.*', 'users.name','role_name')
        ->whereNull('blogs.deleted_at')->orderBy('created_at', 'DESC')->paginate(6);
        return view('layouts.gridblogtable', compact('blog')); 
    }

    public function readmoreblog($id)
    {
        $ablog = DB::table('blogs')
        ->join('users', 'blogs.user_id', '=', 'users.id')
        ->leftJoin('role_users', 'users.id', '=', 'role_users.user_id')
        ->leftJoin('roles', 'role_users.role_id', '=', 'roles.id')
        ->select('blogs.*', 'users.name','role_name')
        ->where('id_blog','=', $id)->get();
        return view('layouts.viewblogmore', compact('ablog')); 
    }

    public function ketentuan()
    {
        return view('layouts.ketentuan'); 
    }

    public function viewCOVID19()
    {
        $thiskategori=produk::
        join('kategori_produk','kategori_produk.id','=','produk.id_kategori')
        ->where('kategori_produk.id', '=','K0007')
        ->whereNull('produk.deleted_at')->select('produk.*', 'kategori_produk.id as katid', 'kategori_produk.nama_kategori')->orderBy('produk.created_at', 'desc')->paginate(12);
        $newarrival = DB::table('produk')->whereNull('produk.deleted_at')->latest()->take(8)->get();
        $galpro = DB::table('galeri_produk')->whereNull('galeri_produk.deleted_at')->get();
        $countprod = $thiskategori->count('produk.id');
        $katid='K0007';
        // dd($namakategori);
        return view('layouts.paketview', compact('thiskategori','newarrival','galpro','countprod','katid')); 
    }

    public function viewWedding()
    {
        $thiskategori=produk::
        join('kategori_produk','kategori_produk.id','=','produk.id_kategori')
        ->where('kategori_produk.id', '=','K0010')
        ->whereNull('produk.deleted_at')->select('produk.*', 'kategori_produk.id as katid', 'kategori_produk.nama_kategori')->orderBy('produk.created_at', 'desc')->paginate(12);
        $newarrival = DB::table('produk')->whereNull('produk.deleted_at')->latest()->take(8)->get();
        $galpro = DB::table('galeri_produk')->whereNull('galeri_produk.deleted_at')->get();
        $countprod = $thiskategori->count('produk.id');
        $katid='K0010';
        // dd($thiskategori);
        return view('layouts.paketview', compact('thiskategori','newarrival','galpro','countprod','katid'));  
    }

    public function viewPemerintahan()
    {
        $thiskategori=produk::
        join('kategori_produk','kategori_produk.id','=','produk.id_kategori')
        ->where('kategori_produk.id', '=','K0008')
        ->whereNull('produk.deleted_at')->select('produk.*', 'kategori_produk.id as katid', 'kategori_produk.nama_kategori')->orderBy('produk.created_at', 'desc')->paginate(12);
        $newarrival = DB::table('produk')->whereNull('produk.deleted_at')->latest()->take(8)->get();
        $galpro = DB::table('galeri_produk')->whereNull('galeri_produk.deleted_at')->get();
        $countprod = $thiskategori->count('produk.id');
        $katid='K0008';
        // dd($thiskategori);
        return view('layouts.paketview', compact('thiskategori','newarrival','galpro','countprod','katid')); 
    }

    public function viewPabrik()
    {
        $thiskategori=produk::
        join('kategori_produk','kategori_produk.id','=','produk.id_kategori')
        ->where('kategori_produk.id', '=','K0009')
        ->whereNull('produk.deleted_at')->select('produk.*', 'kategori_produk.id as katid', 'kategori_produk.nama_kategori')->orderBy('produk.created_at', 'desc')->paginate(12);
        $newarrival = DB::table('produk')->whereNull('produk.deleted_at')->latest()->take(8)->get();
        $galpro = DB::table('galeri_produk')->whereNull('galeri_produk.deleted_at')->get();
        $countprod = $thiskategori->count('produk.id');
        $katid='K0009';
        // dd($thiskategori);
        return view('layouts.paketview', compact('thiskategori','newarrival','galpro','countprod','katid')); 
    }

    public function  viewTumpengHantaran()
    {
        $thiskategori=produk::
        join('kategori_produk','kategori_produk.id','=','produk.id_kategori')
        ->where('kategori_produk.id', '=','K0001')
        ->whereNull('produk.deleted_at')->select('produk.*', 'kategori_produk.id as katid', 'kategori_produk.nama_kategori')->orderBy('produk.created_at', 'desc')->paginate(12);
        $newarrival = DB::table('produk')->whereNull('produk.deleted_at')->latest()->take(8)->get();
        $galpro = DB::table('galeri_produk')->whereNull('galeri_produk.deleted_at')->get();
        $countprod = $thiskategori->count('produk.id');
        $katid='K0001';
        // dd($thiskategori);
        return view('layouts.paketview', compact('thiskategori','newarrival','galpro','countprod','katid')); 
    }

    public function viewSnackBox()
    {
        $thiskategori=produk::
        join('kategori_produk','kategori_produk.id','=','produk.id_kategori')
        ->where('kategori_produk.id', '=','K0003')
        ->whereNull('produk.deleted_at')->select('produk.*', 'kategori_produk.id as katid', 'kategori_produk.nama_kategori')->orderBy('produk.created_at', 'desc')->paginate(12);
        $newarrival = DB::table('produk')->whereNull('produk.deleted_at')->latest()->take(8)->get();
        $galpro = DB::table('galeri_produk')->whereNull('galeri_produk.deleted_at')->get();
        $countprod = $thiskategori->count('produk.id');
        $katid='K0003';
        // dd($thiskategori);
        return view('layouts.paketview', compact('thiskategori','newarrival','galpro','countprod','katid'));   
    }

    public function viewRiceBox()
    {
        $thiskategori=produk::
        join('kategori_produk','kategori_produk.id','=','produk.id_kategori')
        ->where('kategori_produk.id', '=','K0002')
        ->whereNull('produk.deleted_at')->select('produk.*', 'kategori_produk.id as katid', 'kategori_produk.nama_kategori')->orderBy('produk.created_at', 'desc')->paginate(12);
        $newarrival = DB::table('produk')->whereNull('produk.deleted_at')->latest()->take(8)->get();
        $galpro = DB::table('galeri_produk')->whereNull('galeri_produk.deleted_at')->get();
        $countprod = $thiskategori->count('produk.id');
        $katid='K0002';
        // dd($thiskategori);
        return view('layouts.paketview', compact('thiskategori','newarrival','galpro','countprod','katid')); 
    }

    public function viewAqiqah()
    {
        $thiskategori=produk::
        join('kategori_produk','kategori_produk.id','=','produk.id_kategori')
        ->where('kategori_produk.id', '=','K0004')
        ->whereNull('produk.deleted_at')->select('produk.*', 'kategori_produk.id as katid', 'kategori_produk.nama_kategori')->orderBy('produk.created_at', 'desc')->paginate(12);
        $newarrival = DB::table('produk')->whereNull('produk.deleted_at')->latest()->take(8)->get();
        $galpro = DB::table('galeri_produk')->whereNull('galeri_produk.deleted_at')->get();
        $countprod = $thiskategori->count('produk.id');
        $katid='K0004';
        // dd($thiskategori);
        return view('layouts.paketview', compact('thiskategori','newarrival','galpro','countprod','katid')); 
    }

    public function viewRamadhan()
    {
        $thiskategori=produk::
        join('kategori_produk','kategori_produk.id','=','produk.id_kategori')
        ->where('kategori_produk.id', '=','K0005')
        ->whereNull('produk.deleted_at')->select('produk.*', 'kategori_produk.id as katid', 'kategori_produk.nama_kategori')->orderBy('produk.created_at', 'desc')->paginate(12);
        $newarrival = DB::table('produk')->whereNull('produk.deleted_at')->latest()->take(8)->get();
        $galpro = DB::table('galeri_produk')->whereNull('galeri_produk.deleted_at')->get();
        $countprod = $thiskategori->count('produk.id');
        $katid='K0005';
        // dd($thiskategori);
        return view('layouts.paketview', compact('thiskategori','newarrival','galpro','countprod','katid')); 
    }

    public function viewLebaran()
    {
        $thiskategori=produk::
        join('kategori_produk','kategori_produk.id','=','produk.id_kategori')
        ->where('kategori_produk.id', '=','K0006')
        ->whereNull('produk.deleted_at')->select('produk.*', 'kategori_produk.id as katid', 'kategori_produk.nama_kategori')->orderBy('produk.created_at', 'desc')->paginate(12);
        $newarrival = DB::table('produk')->whereNull('produk.deleted_at')->latest()->take(8)->get();
        $galpro = DB::table('galeri_produk')->whereNull('galeri_produk.deleted_at')->get();
        $countprod = $thiskategori->count('produk.id');
        $katid='K0006';
        // dd($thiskategori);
        return view('layouts.paketview', compact('thiskategori','newarrival','galpro','countprod','katid')); 
    }

    public function viewKhusus()
    {
        $thiskategori=produk::
        join('kategori_produk','kategori_produk.id','=','produk.id_kategori')
        ->where('kategori_produk.id', '=','K0011')
        ->whereNull('produk.deleted_at')->select('produk.*', 'kategori_produk.id as katid', 'kategori_produk.nama_kategori')->orderBy('produk.created_at', 'desc')->paginate(12);
        $newarrival = DB::table('produk')->whereNull('produk.deleted_at')->latest()->take(8)->get();
        $galpro = DB::table('galeri_produk')->whereNull('galeri_produk.deleted_at')->get();
        $countprod = $thiskategori->count('produk.id');
        $katid='K00011';
        // dd($thiskategori);
        return view('layouts.paketview', compact('thiskategori','newarrival','galpro','countprod','katid')); 
    }


  
    


   
}
