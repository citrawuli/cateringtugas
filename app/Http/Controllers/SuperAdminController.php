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
            ->get();
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
            'name.required' => 'Please enter your Username',
            'email.required' => 'Please enter your Email',
            'password.required' => 'Please enter your Password',
            'email.unique' => 'This Email is already exist',
            'password.min' => 'Password length Must be greater than 8 characters',
            'password.confirmed' => 'Password Confirmation should match the Password',
        ]
        );

        // User::create($request->all());
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
    
        Session::flash('message', "Data user berhasil ditambahkan");
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
            'user_id.required' => 'Column User can not be empty',
            'role_id.required' => 'Column Role can not be empty',
            'user_id.unique' => 'This user already has a role',
        ]
        );

        DB::table('role_users')->insert([
            'user_id'=> $request->input('user_id'),
            'role_id' => $request->input('role_id'),
            'created_at' =>  \Carbon\Carbon::now(), 
            'updated_at' => \Carbon\Carbon::now()  
        ]);
    
        Session::flash('message', "Data role user berhasil ditambahkan");
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
            return back()->withError("You cannot edit user role. This user doesn't have a role.");
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
        Session::flash('message', "Data role user berhasil diubah");
        return Redirect::back();
    }

    public function viewcategorytable(){
        $category = DB::table('kategori_produk')->get();
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
            'category_name.required' => 'Please enter Category Name',
            'category_name.unique' => 'This Category is already exist',
            'category_name.max' => 'Category Name Must below 25 characters',
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
            'category_name.required' => 'Please enter Category Name',
            'category_name.unique' => 'This Category is already exist',
            'category_name.max' => 'Category Name Must below 25 characters',
        ]
        );

        $model = kategoriProduk::find($id);
        $model->nama_kategori = $request->input('category_name');
        $model->touch();
        $model->save();
        Session::flash('message', "Data kategori user berhasil diubah");
        return Redirect::back();
    }

    public function viewproducttable(){
        $product = DB::table('produk')
            ->join('kategori_produk', 'produk.id_kategori', '=', 'kategori_produk.id')
            ->select('produk.*','kategori_produk.nama_kategori')
            ->get();
        $page_title = 'Product Table';
        $page_description = 'Some description for the page';
        $logo = "teamo/images/aisyacatering_kontak_logo.png";
        $logoText = "teamo/images/aisya-catering-logo3.png";
        $action = __FUNCTION__;
        //dump($barang);        
        return view('viewSuperAdmin.tableProduct', compact('product', 'page_title', 'page_description','action','logo','logoText'));
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
            'product_type' => ['max:50'],
            'product_desc' => ['max:190'],
            'product_price' => ['required'],
        ],
        [
            'category_name.required' => 'Please select Category',
            'product_name.required' => 'Please enter Product Name',
            'product_name.unique' => 'This Product is already exist',
            'product_name.max' => 'Product Name Must below 50 characters',
            'product_type.max' => 'Product Type Must below 50 characters',
            'product_desc.max' => 'Product Desc Must below 190 characters',
            'product_price.required' => 'Please enter Product Price',
            
        ]
        );

        DB::table('produk')->insert([
            'id_kategori'=> $request->input('category_name'),
            'nama_produk' => $request->input('product_name'),
            'tipe_produk' => $request->input('product_type'),
            'deskripsi_produk' => $request->input('product_desc'),
            'harga_produk' => $request->input('product_price'),
            'created_at' =>  \Carbon\Carbon::now(), 
            'updated_at' => \Carbon\Carbon::now()  
        ]);

        Session::flash('message', "Data Produk berhasil ditambahkan");
        return Redirect::back();
    }






}
