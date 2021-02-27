<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Session;
use Redirect;
use App\Models\User;
use App\Models\role_users;
use App\Models\kategoriProduk;
use App\Models\produk;
use Carbon\Carbon;
use Exception;

class SuperAdminController extends Controller
{
    //
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index()
    {
        if (request()->user()->hasRole('superAdmin')) {
            return view('viewSuperAdmin.homeSA');
        } else {
            return redirect('/');
        } 
    }

    public function dashboard_1()
    {
      
        if (request()->user()->hasRole('superAdmin')) {
            $page_title = 'Dashboard';
            $page_description = 'Some description for the page';
            $logo = "teamo/images/aisyacatering_kontak_logo.png";
            $logoText = "teamo/images/aisya-catering-logo3.png";
            $action = __FUNCTION__;
            return view('viewSuperAdmin.homeSA', compact('page_title', 'page_description','action','logo','logoText'));
        } else {
            return redirect('/');
        } 
        
    }

    public function viewusertable(){
        $users = DB::table('users')->get();
        $user = DB::table('users')
            ->leftJoin('role_users', 'users.id', '=', 'role_users.user_id')
            ->leftJoin('roles', 'role_users.role_id', '=', 'roles.id')
            ->select('users.id', 'users.name','users.email','users.created_at','role_name', 'role_users.updated_at')
            ->whereNull('users.deleted_at')->get();
        $page_title = 'User Table';
        $page_description = 'Some description for the page';
        $logo = "teamo/images/aisyacatering_kontak_logo.png";
        $logoText = "teamo/images/aisya-catering-logo3.png";
        $action = __FUNCTION__;
        //dump($barang);        
        return view('viewSuperAdmin.tableUser', compact('user', 'page_title', 'page_description','action','logo','logoText'));
    }
    public function viewuserforminput(){
        $page_title = 'Add User Form';
        $page_description = 'Some description for the page';
        $logo = "teamo/images/aisyacatering_kontak_logo.png";
        $logoText = "teamo/images/aisya-catering-logo3.png";
        $action = __FUNCTION__;
        return view('viewSuperAdmin.userforminput', compact('page_title', 'page_description','action','logo','logoText'));
    }

    public function storeuser(Request $request){
        $validator = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ],
        [
            'name.required' => 'Mohon mengisi nama pengguna',
            'email.required' => 'Mohon mengisi email pengguna',
            'password.required' => 'Mohon mengisi password pengguna',
            'email.unique' => 'Email ini sudah ada',
            'password.min' => 'Password harus lebih panjang dari 8 karakter',
            'password.confirmed' => 'Konfirmasi password harus sama dengan password',
        ]
        );

        // User::create($request->all());
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
    
        Session::flash('message', "Data pengguna berhasil ditambahkan");
        return Redirect::back();
    }

    public function viewformaddroleuser(){
        $users = DB::table('users')->get();
        $roles = DB::table('roles')->get();
        $page_title = 'Add User Role Form';
        $page_description = 'Some description for the page';
        $logo = "teamo/images/aisyacatering_kontak_logo.png";
        $logoText = "teamo/images/aisya-catering-logo3.png";
        $action = __FUNCTION__;
        return view('viewSuperAdmin.addroleuserform', compact('users','roles','page_title', 'page_description','action','logo','logoText'));
    }

    public function storeuserrole(Request $request){
        $validator = $request->validate([
            'user_id' => ['required', 'unique:role_users,user_id'],
            'role_id' => ['required'],
        ],
        [
            'user_id.required' => 'Kolom pengguna harus diisi',
            'role_id.required' => 'Kolom hak akses harus diisi',
            'user_id.unique' => 'Pengguna bersangkutan telah memiliki peran/hak akses',
        ]
        );

        DB::table('role_users')->insert([
            'user_id'=> $request->input('user_id'),
            'role_id' => $request->input('role_id'),
            'created_at' =>  \Carbon\Carbon::now(), 
            'updated_at' => \Carbon\Carbon::now()  
        ]);
    
        Session::flash('message', "Data peran/hak akses pengguna berhasil ditambahkan");
        return Redirect::back();
    }

    public function edituser($id)
    {
        try {
            $roles = DB::table('roles')->get();
            $role_users = DB::table('role_users')
                ->where('role_users.user_id', $id)
                ->first();
            $user = DB::table('users')->where('users.id', $id)
                ->first();
        } catch (\ErrorException $e) {
            return back()->withError("Anda tidak dapat mengedit pengguna bersangkutan karena pengguna tidak memiliki peran/hak akses.");
        }


        $page_title = 'Edit User Form';
        $page_description = 'Some description for the page';
        $logo = "teamo/images/aisyacatering_kontak_logo.png";
        $logoText = "teamo/images/aisya-catering-logo3.png";
        $action = __FUNCTION__;

        return view('viewSuperAdmin.userformedit',compact('role_users', 'user','roles','page_title', 'page_description','action','logo','logoText') );

    }

    public function updateuser(Request $request, $id)
    {
        //CARA AWAL BISA KOK, JUST TRY WITH MODEL
        // DB::table('role_users')  
        //     ->where('user_id', $id)
        //     ->update(
        //         ['role_id' => $request->input('role'), 
        //         'updated_at' => \Carbon\Carbon::now()])
        //     ;
        $model = role_users::find($id);
        $model->role_id = $request->input('role');
        $model->touch();
        $model->save();
        Session::flash('message', "Data peran/hak akses pengguna berhasil diubah");
        return Redirect::back();
    }

    public function deleteuser($id)
    {
        $model = user::find($id);
        $model->delete();

        Session::flash('message', "Data pengguna {$model->name} berhasil dihapus");
        return Redirect::back();
    }

    public function trasheduser()
    {
        // mengampil data  yang sudah dihapus
        $model = user::onlyTrashed()->get();

        $page_title = 'Trashed User Table';
        $page_description = 'Some description for the page';
        $logo = "teamo/images/aisyacatering_kontak_logo.png";
        $logoText = "teamo/images/aisya-catering-logo3.png";
        $action = __FUNCTION__;
        return view('viewSuperAdmin.tableTrashedUser', compact('model', 'page_title', 'page_description','action','logo','logoText'));
    }

    public function restoreuser($id)
    {
        $model = user::onlyTrashed()->where('id',$id);
        $model->restore();

        Session::flash('message', "Data pengguna berhasil dikembalikan");
        return Redirect::back();
    }

    public function deletepermanentuser($id)
    {
        // hapus permanen data 
        $model = user::onlyTrashed()->where('id',$id);
        $model->forceDelete();
 
        Session::flash('message', "Data pengguna berhasil dihapus permanen");
        return Redirect::back();
    }

    public function restorealluser()
    {
            
        $model = user::onlyTrashed();
        $model->restore();
 
        Session::flash('message', "Semua data pengguna berhasil dikembalikan");
        return Redirect::back();
    }

    public function deletepermanentalluser()
    {
        // hapus permanen semua data  yang sudah dihapus
        $model = user::onlyTrashed();
        $model->forceDelete();
 
        Session::flash('message', "Semua data pengguna berhasil dihapus permanen");
        return Redirect::back();
    }

    public function viewcategorytable(){
        $category = DB::table('kategori_produk')->whereNull('deleted_at')->get();
        $page_title = 'Category Table';
        $page_description = 'Some description for the page';
        $logo = "teamo/images/aisyacatering_kontak_logo.png";
        $logoText = "teamo/images/aisya-catering-logo3.png";
        $action = __FUNCTION__;
        //dump($barang);        
        return view('viewSuperAdmin.tableCategory', compact('category', 'page_title', 'page_description','action','logo','logoText'));
    }


    public function viewcategoryforminput(){
        $page_title = 'Add Category Form';
        $page_description = 'Some description for the page';
        $logo = "teamo/images/aisyacatering_kontak_logo.png";
        $logoText = "teamo/images/aisya-catering-logo3.png";
        $action = __FUNCTION__;
        return view('viewSuperAdmin.addcategoryform', compact('page_title', 'page_description','action','logo','logoText'));
    }

    public function storecategory(Request $request){
        $validator = $request->validate([
            'category_name' => ['required', 'string', 'max:25', 'unique:kategori_produk,nama_kategori'],
        ],
        [
            'category_name.required' => 'Mohon mengisi nama kategori',
            'category_name.unique' => 'Kategori ini sudah ada',
            'category_name.max' => 'Panjang nama kategori harus di bawah 25 karakter',
        ]
        );

        // User::create($request->all());
        kategoriProduk::create([
            'nama_kategori' => $request->category_name,
        ]);
    
        Session::flash('message', "Data kategori berhasil ditambahkan");
        return Redirect::back();
    }

    public function editcategory($id)
    {
        $category = DB::table('kategori_produk')->where('kategori_produk.id', $id)
                ->first();
       
        $page_title = 'Edit Category Form';
        $page_description = 'Some description for the page';
        $logo = "teamo/images/aisyacatering_kontak_logo.png";
        $logoText = "teamo/images/aisya-catering-logo3.png";
        $action = __FUNCTION__;

        return view('viewSuperAdmin.userformeditcategory',compact('category', 'page_title', 'page_description','action','logo','logoText') );

    }

    public function updatecategory(Request $request, $id)
    {
       $validator = $request->validate([
            'category_name' => ['required', 'string', 'max:25', 'unique:kategori_produk,nama_kategori'],
        ],
        [
            'category_name.required' => 'Mohon mengisi nama pengguna',
            'category_name.unique' => 'Kategori ini sudah ada',
            'category_name.max' => 'Panjang nama kategori harus dibawah 25 karakter',
        ]
        );

        $model = kategoriProduk::find($id);
        $model->nama_kategori = $request->input('category_name');
        $model->touch();
        $model->save();
        Session::flash('message', "Data kategori berhasil diubah");
        return Redirect::back();
    }

    public function deletecategory($id)
    {
        $model = kategoriProduk::find($id);
        $model->delete();

        Session::flash('message', "Data kategori {$model->nama_kategori} berhasil dihapus");
        return Redirect::back();
    }

    public function trashedcategory()
    {
        // mengampil data  yang sudah dihapus
        $model = kategoriProduk::onlyTrashed()->get();

        $page_title = 'Trashed Category Table';
        $page_description = 'Some description for the page';
        $logo = "teamo/images/aisyacatering_kontak_logo.png";
        $logoText = "teamo/images/aisya-catering-logo3.png";
        $action = __FUNCTION__;
        return view('viewSuperAdmin.tableTrashedCategory', compact('model', 'page_title', 'page_description','action','logo','logoText'));
    }

    public function restorecategory($id)
    {
        $model = kategoriProduk::onlyTrashed()->where('id',$id);
        $model->restore();

        Session::flash('message', "Data kategori berhasil dikembalikan");
        return Redirect::back();
    }

    public function deletepermanentcategory($id)
    {
        // hapus permanen data 
        $model = kategoriProduk::onlyTrashed()->where('id',$id);
        $model->forceDelete();
 
        Session::flash('message', "Data kategori berhasil dihapus permanen");
        return Redirect::back();
    }

    public function restoreallcategory()
    {
            
        $model = kategoriProduk::onlyTrashed();
        $model->restore();
 
        Session::flash('message', "Semua data kategori berhasil dikembalikan");
        return Redirect::back();
    }
 
    public function deletepermanentallcategory()
    {
        // hapus permanen semua data  yang sudah dihapus
        $model = kategoriProduk::onlyTrashed();
        $model->forceDelete();
 
        Session::flash('message', "Semua data kategori berhasil dihapus permanen");
        return Redirect::back();
    }

    public function viewproducttable(){
        $product = DB::table('produk')
            ->join('kategori_produk', 'produk.id_kategori', '=', 'kategori_produk.id')
            ->select('produk.*','kategori_produk.nama_kategori')
            ->whereNull('produk.deleted_at')->get();
        $page_title = 'Product Table';
        $page_description = 'Some description for the page';
        $logo = "teamo/images/aisyacatering_kontak_logo.png";
        $logoText = "teamo/images/aisya-catering-logo3.png";
        $action = __FUNCTION__;
        //dump($barang);        
        return view('viewSuperAdmin.tableProduct', compact('product', 'page_title', 'page_description','action','logo','logoText'));
    }

    public function viewproductgalerydropzone()
    {
        $files = scandir(public_path('images'));
        $data = [];
        foreach ($files as $row) {
            if ($row != '.' && $row != '..') {
                $data[] = [
                    'name' => explode('.', $row)[0],
                    'url' => asset('images/' . $row)
                ];
            }
        }
        return view('viewSuperAdmin.tableProduct', compact('data'));
    }
    
    public function dropzoneStore(Request $request, $id)
    {
        // $image = $request->file('file');
   
        // $imageName = time() . '-' . strtoupper(Str::random(10)) . '.' . $image->extension();
        // $image->move(public_path('images'), $imageName);
   
        // return response()->json(['success'=> $imageName]);

        $produk = produk::find($id);

        //image upload
        $image=$request->file('file');

        if($image){
            $imageName=time(). $image->getClientOriginalName();
            $image->move(public_path('images'),$imageName);
            $imagePath= "/images/$imageName";
            $produk->images()->create(['image_path'=>$imagePath]);
        }

        return "done";
    }

    public function viewproductforminput(){
        $category = DB::table('kategori_produk')->get();
        $page_title = 'Add Category Form';
        $page_description = 'Some description for the page';
        $logo = "teamo/images/aisyacatering_kontak_logo.png";
        $logoText = "teamo/images/aisya-catering-logo3.png";
        $action = __FUNCTION__;
        return view('viewSuperAdmin.addproductform', compact('category', 'page_title', 'page_description','action','logo','logoText'));
    }

    public function storeproduct(Request $request){
        $validator = $request->validate([
            'category_name' => ['required'],
            'product_name' => ['required', 'string', 'max:50', 'unique:produk,nama_produk'],
            'product_type' => ['max:20'],
            'product_desc' => ['max:150'],
            'product_price' => ['required'],
        ],
        [
            'category_name.required' => 'Mohon memilih nama kategori',
            'product_name.required' => 'Mohon mengisi nama produk',
            'product_name.unique' => 'Produk ini sudah ada',
            'product_name.max' => 'Nama produk harus dibawah 50 karakter',
            'product_type.max' => 'Tipe produk harus dibawah 20 karakter',
            'product_desc.max' => 'Deskripsi produk harus dibawah 150 karakter',
            'product_price.required' => 'Mohon mengisi harga produk',
            
        ]
        );


        produk::create([
            'id_kategori' => $request->category_name,
            'nama_produk' => $request->product_name,
            'tipe_produk' => $request->product_type,
            'deskripsi_produk' => $request->product_desc,
            'harga_produk' => $request->product_price,
            'created_at' => \Carbon\Carbon::now(), 
            'updated_at' => \Carbon\Carbon::now(), 
        ]);

        Session::flash('message', "Data produk berhasil ditambahkan");
        return Redirect::back();
    }

    public function editproduct($id)
    {
        $produk = DB::table('produk')->where('produk.id', $id)
                ->first();
        $category = DB::table('kategori_produk')->get();
       
        $page_title = 'Edit Category Form';
        $page_description = 'Some description for the page';
        $logo = "teamo/images/aisyacatering_kontak_logo.png";
        $logoText = "teamo/images/aisya-catering-logo3.png";
        $action = __FUNCTION__;

        return view('viewSuperAdmin.userformeditproduk',compact('produk', 'category', 'page_title', 'page_description','action','logo','logoText') );

    }

    public function updateproduct(Request $request, $id)
    {
       $validator = $request->validate([
            'category_name' => ['required'],
            'product_name' => ['required', 'string', 'max:50'],
            'product_type' => ['max:20'],
            'product_desc' => ['max:150'],
            'product_price' => ['required'],
        ],
        [
            'category_name.required' => 'Mohon memilih nama kategori',
            'product_name.required' => 'Mohon mengisi nama produk',
            'product_name.max' => 'Nama produk harus dibawah 50 karakter',
            'product_type.max' => 'Tipe produk harus dibawah 20 karakter',
            'product_desc.max' => 'Deskripsi produk harus dibawah 150 karakter',
            'product_price.required' => 'Mohon mengisi harga produk',
            
        ]
        );

        $model = produk::find($id);
        $model->id_kategori = $request->input('category_name');
        $model->nama_produk = $request->input('product_name');
        $model->tipe_produk = $request->input('product_type');
        $model->deskripsi_produk = $request->input('product_desc');
        $model->harga_produk = $request->input('product_price');
        $model->touch();
        $model->save();
        Session::flash('message', "Data produk berhasil diubah");
        return Redirect::back();
    }

    public function deleteproduct($id)
    {
        $model = produk::find($id);
        $model->delete();

        Session::flash('message', "Data produk {$model->nama_produk} berhasil dihapus");
        return Redirect::back();
    }

    public function trashedproduct()
    {
        // mengampil data  yang sudah dihapus
        $model = produk::onlyTrashed()->get();

        $page_title = 'Trashed Product Table';
        $page_description = 'Some description for the page';
        $logo = "teamo/images/aisyacatering_kontak_logo.png";
        $logoText = "teamo/images/aisya-catering-logo3.png";
        $action = __FUNCTION__;
        return view('viewSuperAdmin.tableTrashedProduct', compact('model', 'page_title', 'page_description','action','logo','logoText'));
    }

    public function restoreproduct($id)
    {
        $model = produk::onlyTrashed()->where('id',$id);
        $model->restore();

        Session::flash('message', "Data produk berhasil dikembalikan");
        return Redirect::back();
    }

    public function deletepermanent($id)
    {
        // hapus permanen data 
        $model = produk::onlyTrashed()->where('id',$id);
        $model->forceDelete();
 
        Session::flash('message', "Data produk berhasil dihapus permanen");
        return Redirect::back();
    }

    public function restoreallproduct()
    {
            
        $model = produk::onlyTrashed();
        $model->restore();
 
        Session::flash('message', "Semua data produk berhasil dikembalikan");
        return Redirect::back();
    }
 
    public function deletepermanentallproduct()
    {
        // hapus permanen semua data  yang sudah dihapus
        $model = produk::onlyTrashed();
        $model->forceDelete();
 
        Session::flash('message', "Semua data produk berhasil dihapus permanen");
        return Redirect::back();
    }

    public function viewpemesanantable(){
        $pemesanan = DB::table('users')
            ->join('pemesanan', 'pemesanan.user_id', '=', 'users.id')
            ->leftJoin('detailtransaksi', 'pemesanan.id', '=', 'detailtransaksi.id_pemesanan')
            ->leftJoin('produk', 'detailtransaksi.id_produk', '=', 'produk.id')
            ->select('pemesanan.*','users.name', 'produk.id as produk_id', 'detailtransaksi.id_produk as detail_idproduk', 'detailtransaksi.id_pemesanan as detail_idpemesanan')
            ->whereNull('pemesanan.deleted_at')->get();
        $page_title = 'Order Request Table';
        $page_description = 'Some description for the page';
        $logo = "teamo/images/aisyacatering_kontak_logo.png";
        $logoText = "teamo/images/aisya-catering-logo3.png";
        $action = __FUNCTION__;
        //dump($barang);        
        return view('viewSuperAdmin.tableRequestPemesanan', compact('pemesanan', 'page_title', 'page_description','action','logo','logoText'));
    }

    public function viewformpemesanan(){
        $users = DB::table('users')->get();
        $produk = DB::table('produk')->get();
        $page_title = 'Add Category Form';
        $page_description = 'Some description for the page';
        $logo = "teamo/images/aisyacatering_kontak_logo.png";
        $logoText = "teamo/images/aisya-catering-logo3.png";
        $action = __FUNCTION__;
        return view('viewSuperAdmin.addpemesananform', compact('users', 'produk', 'page_title', 'page_description','action','logo','logoText'));
    }

    public function loadDataUser(Request $request)
    {
        if ($request->has('q')) {
            $cariuser = $request->q;
            $data = DB::table('users')->select('id', 'name')->where('name', 'LIKE', '%$cariuser%')->get();
            return response()->json($data);
        }
        return response()->json($data);
    }

    public function loadDataProduk(Request $request)
    {
        $produk = [];

        if($request->has('q')){
            $search = $request->q;
            $produk =produk::select("id", "name_produk")
                    ->where('name_produk', 'LIKE', "%$search%")
                    ->get();
        }
        return response()->json($produk);
    }

    public function getdataproduk($id_produk){
        echo json_encode(DB::table('produk')->where('id', $id_produk)->get());
    }



}
