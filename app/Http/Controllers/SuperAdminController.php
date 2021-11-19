<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Session;
use Redirect;
use App\Models\User;
use App\Models\blog;
use App\Models\role_users;
use App\Models\kategoriProduk;
use App\Models\produk;
use App\Models\galeriProduk;
use App\Models\Pemesanan;
use App\Models\Pembayaran;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Input;
use PDF;

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
            $totalusers = DB::table('users')
            ->leftJoin('role_users', 'users.id', '=', 'role_users.user_id')
            ->leftJoin('roles', 'role_users.role_id', '=', 'roles.id')
            ->where('roles.id','=',NULL)
            ->orWhere('roles.id','=','R0001')
            ->whereNull('users.deleted_at')->get()->count('users.id');

            $totalproduk = produk::whereNull('deleted_at')->get()->count('id');
            $totalpemesanan = Pemesanan::with(['products'])->whereNull('pemesanan.deleted_at')->get()->count('id_pemesanan');
            $jumlahSudahBayar = Pembayaran::with('detpems')->whereNull('pembayaran.deleted_at')->get()->sum('jumlah_bayar');

            $waiting = Pemesanan::with(['products'])->where('status_pemesanan', '=', '1')->whereNull('pemesanan.deleted_at')->get()->count('id_pemesanan');
            $notyet = Pemesanan::with(['products'])->where('status_pemesanan', '=', '2')->where('status_progress', '=', '1')->whereNull('pemesanan.deleted_at')->get()->count('id_pemesanan');
            $still = Pemesanan::with(['products'])->where('status_pemesanan', '=', '2')->where('status_progress', '=', '2')->whereNull('pemesanan.deleted_at')->get()->count('id_pemesanan');
            $delivered = Pemesanan::with(['products'])->where('status_pemesanan', '=', '2')->where('status_progress', '=', '3')->whereNull('pemesanan.deleted_at')->get()->count('id_pemesanan');
            $finished = Pemesanan::with(['products'])->where('status_pemesanan', '=', '2')->where('status_progress', '=', '4')->whereNull('pemesanan.deleted_at')->get()->count('id_pemesanan');

            
            $notverif = Pembayaran::with('detpems')->where('status_bayar', '=', '0')->whereNull('pembayaran.deleted_at')->get()->count('id_pembayaran');
            $JMLnotverif = Pembayaran::with('detpems')->where('status_bayar', '=', '0')->whereNull('pembayaran.deleted_at')->get()->sum('jumlah_bayar');
            $verified = Pembayaran::with('detpems')->where('status_bayar', '=', '1')->whereNull('pembayaran.deleted_at')->get()->count('id_pembayaran');
            $JMLverified = Pembayaran::with('detpems')->where('status_bayar', '=', '1')->whereNull('pembayaran.deleted_at')->get()->sum('jumlah_bayar');
            $pycount = Pembayaran::with('detpems')->whereNull('pembayaran.deleted_at')->get()->count('id_pembayaran');

            $page_title = 'Dashboard';
            $page_description = 'Some description for the page';
            $logo = "teamo/images/aisyacatering_kontak_logo.png";
            $logoText = "teamo/images/aisya-catering-logo3.png";
            $action = __FUNCTION__;
            return view('viewSuperAdmin.homeSA', compact('page_title', 'totalusers', 'totalproduk',
            'totalpemesanan','jumlahSudahBayar','waiting','notyet','still','delivered','finished',
            'notverif', 'verified', 'pycount', 'JMLnotverif', 'JMLverified',
            'page_description','action','logo','logoText'));
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
            'name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:50', 'unique:users'],
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
        // $fotoproduk = DB::table('galeri_produk')
        //     ->join('produk','galeri_produk.id_produk', '=', 'produk.id')
        //     ->select('produk.id', 'galeri_produk.*')->get();
        $page_title = 'Product Table';
        $page_description = 'Some description for the page';
        $logo = "teamo/images/aisyacatering_kontak_logo.png";
        $logoText = "teamo/images/aisya-catering-logo3.png";
        $action = __FUNCTION__;
        //dump($barang);        
        return view('viewSuperAdmin.tableProduct', compact('product', 'page_title', 'page_description','action','logo','logoText'));
    }
    
    public function viewcobadropzone(){
        $page_title = 'COBA DROPZONE';
        $page_description = 'Some description for the page';
        $logo = "teamo/images/aisyacatering_kontak_logo.png";
        $logoText = "teamo/images/aisya-catering-logo3.png";
        $action = __FUNCTION__;
        return view('viewSuperAdmin.cobadropzone', compact('page_title', 'page_description','action','logo','logoText'));
    }

    public function dropzoneCobaStore(Request $request){
        //if($request->hasFile('file')){
            $image = $request->file('file');
            //dd($request->all());
            //dd($request);
            // if ($request->hasFile('file')) {
            //     return $request->file('file')->getClientOriginalName();
            // } else {
            //     return 'no file!';
            // }

        $image_tmp = $request->image;
        //$fileName = time() . '.'.$image_tmp->clientExtension();
        //dd($image_tmp);

            //dd($_FILES);
            $imageName = time() . '-' . strtoupper(Str::random(10)) . '.' . $image->extension();
            $image->move(public_path('images'), $imageName);
            $imagePath= "/images/$imageName";
            $produk->images()->create(['image_path'=>$imagePath]);
            return response()->json(['success'=> $imageName]);
        //}

        // //CARA 2
        // $produk = produk::find($id);

        // //image upload
        // $image=$request->file('file');
        // //dd($image);

        // if ($request->file('file')!=null){ 
        //     $file = $request->file('file');
        //     // dd($file);
        // }
        // // if($image){
        //     $imageName=time(). $image->getClientOriginalName();
        //     $image->move(public_path('images'),$imageName);
        //     $imagePath= "/images/$imageName";
        //     $produk->images()->create(['image_path'=>$imagePath]);
        // // 

        // return response()->json(['success'=>$imagePath]);
    }

    public function viewproductgalerydropzone(){
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
    
    public function dropzoneView($id){
        $produk = produk::find($id);
        $galpro = DB::table('galeri_produk')->where('galeri_produk.id_produk', $id)->get();
        //$category = kategoriProduk::find($id);
        //$category = DB::table('kategori_produk')->get();
        $page_title = 'DROPZONE';
        $page_description = 'Some description for the page';
        $logo = "teamo/images/aisyacatering_kontak_logo.png";
        $logoText = "teamo/images/aisya-catering-logo3.png";
        $action = __FUNCTION__;
        return view('viewSuperAdmin.addphotodropzone', compact('produk', 'galpro', 'page_title', 'page_description','action','logo','logoText'));
    }

    public function dropzoneStore(Request $request, $id){
        $produk = produk::find($id);
        $id = $produk->id;
    
        $image=$request->file('file');
        //dd($request->all());
            $imageName=time(). '-'.$image->getClientOriginalName();
            $image->move(public_path('images'),$imageName);
            $imagePath= "/images/$imageName";

            galeriProduk::create([
                'id_produk' => $id,
                'foto' => $imagePath,
                'id_default' => '0',
                'created_at' => \Carbon\Carbon::now(), 
                'updated_at' => \Carbon\Carbon::now(), 
            ]);
                       
            //Session::flash('message', "Gambar berhasil ditambahkan");
            //return Redirect::back()->with('message', 'SUKSES!');
            // return redirect()->, ['message' => 'Y Sukses']);
            //return redirect('/ProductTable/'); 


            //return redirect('dropzoneview/'.$id)->with('message', 'SUKSES!');
            //return redirect()->route('dropzone.view', [$id]);
            //return response()->json(['success'=>$imagePath]);
            //echo asset('images'.$imageName);
            // return response()->json([  
            //     'message'   => 'Image Upload Successfully',
            //     'uploaded_image' => 'asset("$imagePath")', 
            //     'class_name'  => 'alert-success'
            // ]);                   
            //return response()->json(true);
        // }   
        // else {
        //     return "no upload yet";
        // }      
    }

    public function dropzoneFetch(){
        $images = \File::allFiles(public_path('images'));
        $output = '<div class="row">';
        foreach($images as $image){
            $output .= '
            <div class="col-md-2" style="margin-bottom:16px;" align="center">
                    <img src="'.asset('images/' . $image->getFilename()).'" class="img-thumbnail" width="175" height="175" style="height:175px;" />
                    <button type="button" class="btn btn-link remove_image" id="'.$image->getFilename().'">Remove</button>
                </div>
            ';
        }
        $output .= '</div>';
        echo $output;
    }

    public function dropzoneDelete(Request $request){
        if($request->get('name')){
            \File::delete(public_path($request->get('name')));

            //$model = galeriProduk::find($request->get('id'));
            $model = galeriProduk::where('id_galeri',$request->get('id'));
            $model->forceDelete();
            //dd($request->get('id'));
            //$model->forceDelete();
            //\File::delete(public_path('images/' . $request->get('name')));
            
        }
    }

    public function deleteImageProduct($id)
    {
        $model = galeriProduk::where('id_galeri',$id);
        $model->forceDelete();
 
        Session::flash('message', "Foto produk berhasil dihapus");
        return Redirect::back();
    }

    public function getModalPhotoProduct($id){
        $fotoproduk = DB::table('galeri_produk')
                ->where('galeri_produk.id_produk', $id)->get();
        return response()->json($fotoproduk);
                    // @foreach ($fotoproduk as $fotopr)
                    // <div class="col-md-2" style="margin-bottom:16px;" align="center">
                    //     <img class="bd-placeholder-img"src="{{ asset('{$fotopr->foto}') }}">
                    //     <button type="button" class="btn btn-link remove_image" id="'.$fotopr->getFilename().'">Remove</button>
                                                                    
                    // </div>
                    // @endforeach
        // return $fotoproduk;

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
        $pemesanan2 = DB::table('users')
            ->rightJoin('pemesanan', 'pemesanan.user_id', '=', 'users.id')
            ->leftJoin('detail_transaksi', 'pemesanan.id_pemesanan', '=', 'detail_transaksi.id_pemesanan')
            ->leftJoin('produk', 'detail_transaksi.id_produk', '=', 'produk.id')
            ->select('pemesanan.*','users.name', 'produk.id as produk_id', 'detail_transaksi.id_produk as detail_idproduk', 'detail_transaksi.id_pemesanan as detail_idpemesanan')
            ->whereNull('pemesanan.deleted_at')->get();
        $pemesanan = Pemesanan::with(['products'])->whereNull('pemesanan.deleted_at')->get();
        //dd($pemesanan);
        // NOTE : Change to entity gak ketampil nih!!! Ada di array releationship lol
        // yuk semangat buat nampilin di blade modal produk pivotnya apa aja!!!
        
        // foreach ($pemesanan as $key => $pesanan) {
        //     foreach ($pesanan->products as $attribute) {
        //         // dd($attribute->pivot->id_produk);
        //         // echo $attribute->pivot->id_produk;
        //         $retri= $attribute->pivot->get();
        //     }
        // } gak jadi pake ini, diganti ditempatkan di blade, soalnya nanti kalau ini bakal tampil semuanya per kolom


        $page_title = 'Order Request Table';
        $page_description = 'Some description for the page';
        $logo = "teamo/images/aisyacatering_kontak_logo.png";
        $logoText = "teamo/images/aisya-catering-logo3.png";
        $action = __FUNCTION__;
        //dump($barang);        
        return view('viewSuperAdmin.tableRequestPemesanan', compact('pemesanan', 'page_title', 'page_description','action','logo','logoText'));
    }

    public function acceptorder($id){
        $model = Pemesanan::find($id);
        //dd($model);
        $model->status_pemesanan = "2";
        $model->touch();
        $model->save();
    }

    public function rejectorder($id){
        $model = Pemesanan::find($id);
        // dd($model);
        $model->status_pemesanan = "3";
        $model->touch();
        $model->save();
    }

    public function confirmorder($id){
        $model = Pemesanan::find($id);
        // dd($model);
        $model->status_pemesanan = "1";
        $model->touch();
        $model->save();
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

    public function storePemesanan(Request $request){
        $validator = $request->validate([
            'nama_lengkap' => ['required', 'max:50'],
            'nomor_telp' => ['required', 'max:15'],
            'alamat_lengkap' => ['required', 'max:100'],
            'keterangan' => ['max:200'],
        ],
        [
            'nama_lengkap.required' => 'Nama harus diisi',
            'nomor_telp.required' => 'Nomor ponsel harus diisi',
            'alamat_lengkap.required' => 'Alamat pengiriman harus diisi',
            'nama_lengkap.max' => 'Nama harus dibawah 50 karakter',
            'nomor_telp.max' => 'Nomor ponsel harus dibawah 15 karakter',
            'alamat_lengkap.max' => 'Alamat pengiriman harus dibawah 100 karakter ',
            'keterangan.max' => 'Keterangan harus dibawah 200 karakter',
            ]
        );
        
        // dd($request->all());
        //why I cant save discount value huh?!!

        $a=Carbon::parse($request->input('untuk_tanggal'));
        $b=$request->money_off;
        $ba=$request->percent_off;
        //dd($b,$ba);
        //$tgl= \Carbon\Carbon::createFromFormat('d M,Y',$a)->format('d-m-Y');
        
        $ord = Pemesanan::create([
            'user_id' =>  $request->cariuser,
            'nama_lengkap_pembeli'  =>  $request->nama_lengkap,
            'no_hp_pembeli' =>  $request->nomor_telp,
            'alamat_lengkap_pembeli' =>  $request->alamat_lengkap,
            'untuk_tanggal' =>  $a,
            'untuk_jam' =>  $request->untuk_jam,
            'pengambilan' =>  $request->optionkirim,
            'keterangan' =>  $request->keterangan,
            'discount' =>  $b,
            'discount_inpercent' =>  $request->percent_off,
            'total_transaksi' =>  $request->product_total,
            'total_sub' =>  $request->sub_total_todb,
            'status_pemesanan' =>  "1",
            'status_progress' =>  "1",
            'created_at' => \Carbon\Carbon::now(), 
            'updated_at' => \Carbon\Carbon::now(), 
        ]);
        // dd($request->all());
        $lastId = Pemesanan::latest()->first()->id_pemesanan;
       

        $products = $request->input('select_produk', []);
        $quantities = $request->input('quantity', []);
        $sub_totals = $request->totalrowharga;
        for ($product=0; $product < count($products); $product++) {
            if ($products[$product] != '') {
                //dd($sub_totals); dont use disable input in subtotal, it will return offset
                $try=$ord->products()->attach($products[$product], 
                    ['id_pemesanan'=>$lastId,
                    'kuantitas' => $quantities[$product], 
                    'sub_total' => $sub_totals[$product],
                ]);
                
            }
        }
    
        Session::flash('message', "Data orderan berhasil ditambahkan");
        return Redirect::back()->withInput($request->input());
    } 

    public function EditOrder($id)
    {
        $pemesanan = Pemesanan::with(['products'])->where('pemesanan.id_pemesanan', $id)->get();
        // dd($pemesanan);
        $users = DB::table('users')->get();
        $produk = DB::table('produk')->get();
       
        $page_title = 'Edit Order Form';
        $page_description = 'Some description for the page';
        $logo = "teamo/images/aisyacatering_kontak_logo.png";
        $logoText = "teamo/images/aisya-catering-logo3.png";
        $action = __FUNCTION__;

        return view('viewSuperAdmin.userformeditorder',compact('pemesanan', 'users', 'produk', 'page_title', 'page_description','action','logo','logoText') );

    }

    public function UpdateOrder(Request $request, $id)
    {
    

        // $model = produk::find($id);
        // $model->id_kategori = $request->input('category_name');
        // $model->nama_produk = $request->input('product_name');
        // $model->tipe_produk = $request->input('product_type');
        // $model->deskripsi_produk = $request->input('product_desc');
        // $model->harga_produk = $request->input('product_price');
        $model->touch();
        $model->save();
        Session::flash('message', "Data produk berhasil diubah");
        return Redirect::back();
    }

    public function Invoice($id)
    {
        $page_title = 'Add Category Form';
        $page_description = 'Some description for the page';
        $logo = "teamo/images/aisyacatering_kontak_logo.png";
        $logoText = "teamo/images/aisya-catering-logo3.png";
        $action = __FUNCTION__;

        $pemesanan = Pemesanan::with(['products'])->where('pemesanan.id_pemesanan', $id)->get();
        // dd($pemesanan);
        $users = DB::table('users')->get();
        $produk = DB::table('produk')->get();
        // dump($barang);
        $pdf = PDF::loadView('viewSuperAdmin.invoice', compact('pemesanan', 'users', 'produk')); 
        $pdf->setPaper('a4',  'potrait'); 
        return $pdf->stream(); 

        //eturn view('viewSuperAdmin.invoice', compact('page_title', 'page_description','action','logo','logoText'));
    
    }

    public function deleteOrder($id)
    {
        $model = Pemesanan::find($id);
        $model->delete();

        Session::flash('message', "Data permintaan pemesanan {$model->name} berhasil dihapus");
        return Redirect::back();
    }

    public function trashedOrder()
    {
        // mengampil data  yang sudah dihapus
        $model = Pemesanan::onlyTrashed()->get();

        $page_title = 'Trashed Order Table';
        $page_description = 'Some description for the page';
        $logo = "teamo/images/aisyacatering_kontak_logo.png";
        $logoText = "teamo/images/aisya-catering-logo3.png";
        $action = __FUNCTION__;
        return view('viewSuperAdmin.tableTrashedOrder', compact('model', 'page_title', 'page_description','action','logo','logoText'));
    }

    public function restoreOrder($id)
    {
        $model = Pemesanan::onlyTrashed()->where('id_pemesanan',$id);
        $model->restore();

        Session::flash('message', "Data permintaan pemesanan berhasil dikembalikan");
        return Redirect::back();
    }

    public function deletepermanentOrder($id)
    {
        // hapus permanen data 
        $model = Pemesanan::onlyTrashed()->where('id_pemesanan',$id);
        $model->get()->each(function ($order) {

            $order->products()->detach();
            $order->delete();
    
        });
    
        //$model->products()->detach();
        $model->first()->forceDelete();
 
        Session::flash('message', "Data permintaan pemesanan berhasil dihapus permanen");
        return Redirect::back();
    }

    public function restoreallOrder()
    {
            
        $model = Pemesanan::onlyTrashed();
        $model->restore();
 
        Session::flash('message', "Semua data permintaan pemesanan berhasil dikembalikan");
        return Redirect::back();
    }

    public function deletepermanentallOrder()
    {
        // hapus permanen semua data  yang sudah dihapus
        $model = Pemesanan::onlyTrashed();
        $model->get()->each(function ($order) {

            $order->products()->detach();
            $order->delete();
    
        });
    
        //$model->products()->detach();
        $model->forceDelete();
 
        Session::flash('message', "Semua data permintaan pemesanan berhasil dihapus permanen");
        return Redirect::back();
    }

    public function paymentIDtable($id)
    {
        $pemesanan = Pemesanan::find($id);
        //using with itu di relationshipnya malah dapet satu, tablenya pembayaran->array 1 pemesanan, SOOO KEBALIK
        // $bayar = Pembayaran::with('detpems')->where('pembayaran.id_pemesanan', $id)->whereNull('pembayaran.deleted_at')->get();
        $bayar = Pembayaran::with('detpems')->where('pembayaran.id_pemesanan', $id)->whereNull('pembayaran.deleted_at')->get();
        //ganti, nggak jadi pake foreach blah blah sama code di atas buat ambil sum :')
        $jumlahSudahBayar = Pembayaran::with('detpems')->where('pembayaran.id_pemesanan', $id)->where('status_bayar', '1')->whereNull('pembayaran.deleted_at')->get()->sum('jumlah_bayar');
        $id_pemesanan=$id;
       // $totalcost=0;
        // foreach ($bayar as $b) {
        //         $totalcost = collect($b->jumlah_bayar)->sum();
        // };
        //dd($totalcost,$jumlahSudahBayar,$bayar);
        
        // if ($order_totaltransaksi == $bayar_totalbayar ) {
        //     $status='LUNAS';
        // }
        // else{
        //     $status='BELUM LUNAS';
        // }
       
       
        $page_title = 'Edit Order Form';
        $page_description = 'Some description for the page';
        $logo = "teamo/images/aisyacatering_kontak_logo.png";
        $logoText = "teamo/images/aisya-catering-logo3.png";
        $action = __FUNCTION__;

        return view('viewSuperAdmin.tablepembayaranID',compact('bayar', 'jumlahSudahBayar','pemesanan', "id_pemesanan", 'page_title', 'page_description','action','logo','logoText') );

    }

    public function addpaymentIDtable($id)
    {
        $pemesanan_id=$id;
        $page_title = 'Add Category Form';
        $page_description = 'Some description for the page';
        $logo = "teamo/images/aisyacatering_kontak_logo.png";
        $logoText = "teamo/images/aisya-catering-logo3.png";
        $action = __FUNCTION__;
        return view('viewSuperAdmin.addpembayaranID', compact('pemesanan_id', 'page_title', 'page_description','action','logo','logoText'));
    
    }

    public function storepaymentID(Request $request){
        //forADMIN
        $validator = $request->validate([
            'id_pemesanan' => ['required'],
            'jumlah_bayar' => ['required'],
            'optionbank' => ['required'],
            'atas_nama' => ['max:50'],
            'nomor_rekening' => ['max:20'],
            'file' => ['mimes:jpg,jpeg'],
        ],
        [
            'id_pemesanan.required' => 'Mohon memilih id pemesanan',
            'jumlah_bayar.required' => 'Mohon mengisi jumlah bayar',
            'bank_transfer.required' => 'Mohon memilih jenis bayar',
            'atas_nama.max' => 'Atas Nama harus dibawah 50 karakter',
            'nomor_rekening.max' => 'Nomor Rekening harus dibawah 20 karakter',  
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

        

        Pembayaran::create([
            'id_pemesanan' => $request->id_pemesanan,
            'jumlah_bayar' => $request->jumlah_bayar,
            'tanggal_pembayaran' => \Carbon\Carbon::now(),
            'bank_transfer' => $request->optionbank,
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

    public function changeConfirmStatusPayment(Request $request, $id)
    {
        $model = Pembayaran::find($id);
        //dd($request);
        $model->status_bayar = $request->status;
        $model->touch();
        $model->save();
    }

    public function deletePayment($id)
    {
        $model = Pembayaran::find($id);
        $model->delete();

        Session::flash('message', "Data pembayaran {$model->id_pembayaran} berhasil dihapus");
        return Redirect::back();
    }

    public function trashedPaymentID($id)
    {
        // mengampil data  yang sudah dihapus
        $model = Pembayaran::onlyTrashed()->where('id_pemesanan',$id)->get();
        $pemesanan_id=$id;
        //dd($model);

        $page_title = 'Trashed Payment Table';
        $page_description = 'Some description for the page';
        $logo = "teamo/images/aisyacatering_kontak_logo.png";
        $logoText = "teamo/images/aisya-catering-logo3.png";
        $action = __FUNCTION__;
        return view('viewSuperAdmin.tableTrashedPayment', compact('model', 'pemesanan_id', 'page_title', 'page_description','action','logo','logoText'));
    }

    public function restorePayment($id)
    {
        $model = Pembayaran::onlyTrashed()->where('id_pembayaran',$id);
        $model->restore();

        Session::flash('message', "Data pembayaran berhasil dikembalikan");
        return Redirect::back();
    }

    public function restoreallPayment()
    {
            
        $model = Pembayaran::onlyTrashed();
        $model->restore();
 
        Session::flash('message', "Semua data pembayaran berhasil dikembalikan");
        return Redirect::back();
    }

    public function restoreallPaymentSPO($id)
    {
            
        $model = Pembayaran::onlyTrashed()->where('id_pemesanan',$id);;
        $model->restore();
 
        Session::flash('message', "Semua data pembayaran berhasil dikembalikan");
        return Redirect::back();
    }

    

    public function orderDiterimaTable()
    {
        $pemesanan = Pemesanan::where('status_pemesanan', '2')->whereNull('pemesanan.deleted_at')->get();
        // $jumlahSudahBayar = Pembayaran::with('detpems')->where('status_bayar', '1')->whereNull('pembayaran.deleted_at')->get();
        // $caristatus=Pemesanan::with(['payments'])->whereNull('pemesanan.deleted_at')->get();

        // $jumlahSudahBayarID = DB::table('pembayaran')
        //     ->leftJoin('pemesanan', 'pembayaran.id_pemesanan', '=', 'pemesanan.id_pemesanan')
        //     ->where('status_bayar', '1')
        //     ->groupBy('pembayaran.id_pemesanan')
        //     ->whereNull('pembayaran.deleted_at')->get()->sum('jumlah_bayar');;
        
           
        $page_title = 'Order Request Table';
        $page_description = 'Some description for the page';
        $logo = "teamo/images/aisyacatering_kontak_logo.png";
        $logoText = "teamo/images/aisya-catering-logo3.png";
        $action = __FUNCTION__;
        //dump($barang);        
        return view('viewSuperAdmin.tableAcceptedOrder', compact('pemesanan', 'page_title', 'page_description','action','logo','logoText'));
    }

    public function notyet($id){
        $model = Pemesanan::find($id);
        //dd($model);
        $model->status_progress = "1";
        $model->touch();
        $model->save();
    }

    public function inprocess($id){
        $model = Pemesanan::find($id);
        //dd($model);
        $model->status_progress = "2";
        $model->touch();
        $model->save();
    }

    public function insend($id){
        $model = Pemesanan::find($id);
        //dd($model);
        $model->status_progress = "3";
        $model->touch();
        $model->save();
    }

    public function done($id){
        $model = Pemesanan::find($id);
        //dd($model);
        $model->status_progress = "4";
        $model->touch();
        $model->save();
    }

    public function viewdetailorder($id)
    {
        $pemesanan = Pemesanan::with(['products'])->where('pemesanan.id_pemesanan', $id)->get();
        // dd($pemesanan);
        $user = DB::table('users')->get();
        $produk = DB::table('produk')->get();

        $users = DB::table('users')
            ->leftJoin('role_users', 'users.id', '=', 'role_users.user_id')
            ->leftJoin('roles', 'role_users.role_id', '=', 'roles.id')
            ->select('users.id', 'users.name','role_name')
            ->whereNull('users.deleted_at')->get();
        $category = DB::table('kategori_produk')->get();
        $roles = DB::table('roles')->get();
        $galpro = DB::table('galeri_produk')->get();
       
        $page_title = 'Edit Order Form';
        $page_description = 'Some description for the page';
        $logo = "teamo/images/aisyacatering_kontak_logo.png";
        $logoText = "teamo/images/aisya-catering-logo3.png";
        $action = __FUNCTION__;

        return view('viewSuperAdmin.viewdetailorder',compact('pemesanan', 'galpro', 'category','users','roles', 'produk', 'page_title', 'page_description','action','logo','logoText') );

    }

    public function tablePembayaranAll()
    {
        $pembayaran = Pembayaran::with('detpems')->whereNull('pembayaran.deleted_at')->get();
        $page_title = 'Payment Table';
        $page_description = 'Some description for the page';
        $logo = "teamo/images/aisyacatering_kontak_logo.png";
        $logoText = "teamo/images/aisya-catering-logo3.png";
        $action = __FUNCTION__;

        return view('viewSuperAdmin.tablepembayaranALL',compact('pembayaran', 'page_title', 'page_description','action','logo','logoText') );

    }

    public function trashedPaymentinAll()
    {
        // mengampil data  yang sudah dihapus
        $model = Pembayaran::onlyTrashed()->get();
        //dd($model);

        $page_title = 'Trashed Payment Table';
        $page_description = 'Some description for the page';
        $logo = "teamo/images/aisyacatering_kontak_logo.png";
        $logoText = "teamo/images/aisya-catering-logo3.png";
        $action = __FUNCTION__;
        return view('viewSuperAdmin.tableTrashedPaymentALL', compact('model', 'page_title', 'page_description','action','logo','logoText'));
    }

    public function addpaymentinAll()
    {
        $pemesanan=Pemesanan::whereNull('pemesanan.deleted_at')->get();
        $page_title = 'Add Category Form';
        $page_description = 'Some description for the page';
        $logo = "teamo/images/aisyacatering_kontak_logo.png";
        $logoText = "teamo/images/aisya-catering-logo3.png";
        $action = __FUNCTION__;
        return view('viewSuperAdmin.addpembayaranALL', compact('pemesanan', 'page_title', 'page_description','action','logo','logoText'));
    
    }

    public function edituprof(){
        $page_title = 'Edit User Form';
        $page_description = 'Some description for the page';
        $logo = "teamo/images/aisyacatering_kontak_logo.png";
        $logoText = "teamo/images/aisya-catering-logo3.png";
        $action = __FUNCTION__;
        return view('viewSuperAdmin.edituserprofil', compact('page_title', 'page_description','action','logo','logoText'));
    }
    
    public function updateuprof(Request $request, $id)
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
            'email' => ['required','nullable', 'string', 'email', 'max:50', 'unique:users,email,'.$user->id.',id'],
        ],
        [
            'new_password.different' => 'Password baru harus berbeda dengan password lama',
            'new_password.min' => 'Password baru harus memiliki 8 karakter',
            'new_password.required_with' => 'Anda perlu mengisi kolom Password Baru jika mengisi kolom Password Lama',
            'name.max' => 'Nama makasimal 50 karakter',
            'email.unique' => 'Email ini sudah ada',
        ]
        );

        $model = user::find($id);
        $model->name = $request->input('name');
        $model->email = $request->input('email');
        $model->password = Hash::make($request->input('new_password'));
        $model->touch();
        $model->save();
        Session::flash('message', "Data profil pengguna berhasil diubah");
        return Redirect::back();
    }
    

    public function OrderCalendar(Request $request)
    {
        // if($request->ajax())
    	// {
        //     $pem = Pemesanan::with(['products'])->whereNull('pemesanan.deleted_at')->get();
        //     return response()->json($pem);
    	// }
        
        if($request->ajax()){
            $pemesanan = Pemesanan::with(['products'])->whereNull('pemesanan.deleted_at')->get();
            $datapem = $pemesanan->toJson();

                $events = [];
                foreach( $pemesanan as $key =>$order ){
                    $event = [];
                    $event['title'] = $order->nama_lengkap_pembeli;
                    $event['start'] = $order->untuk_tanggal;
                    $events[] = json_encode($event);
                }

                return response($datapem);
        }
        

        // $events = [];
        // foreach( $pemesanan as $key =>$order ){
        //     $event = [];
        //     $event['title'] = $order->nama_lengkap_pembeli;
        //     $event['start'] = $order->untuk_tanggal;
        //     $events[] = json_encode($event);
        // }
        


        $page_title = 'Order Calendar';
        $page_description = 'Some description for the page';
        $logo = "teamo/images/aisyacatering_kontak_logo.png";
        $logoText = "teamo/images/aisya-catering-logo3.png";
        $action = __FUNCTION__;
        return view('viewSuperAdmin.viewOrderCalendar', compact('page_title', 'page_description','action','logo','logoText'));
    
    }

    public function loadDataUser(Request $request)
    {
        // if ($request->has('q')) {
        //     $cariuser = $request->q;
        //     $data = DB::table('users')->select("*")->where('name', 'LIKE', '%$cariuser%')->get();
        //     return response()->json($data);
        // }
        $data=User::all();
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

    public function blogTable(){
        // $blog = DB::table('blogs')
        //     ->whereNull('blogs.deleted_at')->get();
        // $blog = DB::table('blogs')
        //     ->join('users', 'blogs.user_id', '=', 'users.id')
        //     ->leftJoin('role_users', 'users.id', '=', 'role_users.user_id')
        //     ->leftJoin('roles', 'role_users.role_id', '=', 'roles.id')
        //     ->select('blogs.*', 'users.name','role_name')
        //     ->whereNull('blogs.deleted_at')->get();

        $blog = DB::table('blogs')
        ->join('users', 'blogs.user_id', '=', 'users.id')
        ->leftJoin('role_users', 'users.id', '=', 'role_users.user_id')
        ->leftJoin('roles', 'role_users.role_id', '=', 'roles.id')
        ->select('blogs.*', 'users.name','role_name')
        ->whereNull('blogs.deleted_at')->orderBy('created_at', 'DESC')->paginate(2);
        $orderby="DESC";
        $page_title = 'Blog Table';
        $page_description = 'Some description for the page';
        $logo = "teamo/images/aisyacatering_kontak_logo.png";
        $logoText = "teamo/images/aisya-catering-logo3.png";
        $action = __FUNCTION__;
        //dump($barang);        
        return view('viewSuperAdmin.tableBlog', compact('blog','orderby', 'page_title', 'page_description','action','logo','logoText'));
    }

    public function blogTableASC(){
        $blog = DB::table('blogs')
        ->join('users', 'blogs.user_id', '=', 'users.id')
        ->leftJoin('role_users', 'users.id', '=', 'role_users.user_id')
        ->leftJoin('roles', 'role_users.role_id', '=', 'roles.id')
        ->select('blogs.*', 'users.name','role_name')
        ->whereNull('blogs.deleted_at')->oldest()->paginate(2);
        $orderby="ASC";
        $page_title = 'Blog Table';
        $page_description = 'Some description for the page';
        $logo = "teamo/images/aisyacatering_kontak_logo.png";
        $logoText = "teamo/images/aisya-catering-logo3.png";
        $action = __FUNCTION__;
        //dump($barang);        
        return view('viewSuperAdmin.tableBlog', compact('blog', 'orderby', 'page_title', 'page_description','action','logo','logoText'));
    }

    public function blogForm(){
        $users = DB::table('users')->get();
        $page_title = 'Add Blog';
        $page_description = 'Some description for the page';
        $logo = "teamo/images/aisyacatering_kontak_logo.png";
        $logoText = "teamo/images/aisya-catering-logo3.png";
        $action = __FUNCTION__;
        return view('viewSuperAdmin.addBlog', compact('users', 'page_title', 'page_description','action','logo','logoText'));
    }

    public function getdataproduk($id_produk){
        echo json_encode(DB::table('produk')->where('id', $id_produk)->get());
    }

    public function storeblog(Request $request)
    {
        $validator = $request->validate([
            'judulblog' => ['required', 'max:100'],
            'summernote' => ['required'],
        ],
        [
            'judulblog.required' => 'Mohon mengisi judul blog',
            'summernote.required' => 'Mohon mengisi konten blog',
            'judulblog.max' => 'Judul blog harus dibawah 100 karakter',
            'summernote.max' => 'Konten blog harus dibawah 65.535 karakter',
        ]
        );

        //dd($request->all()); 
        Blog::create([
            'user_id' => $request->cariuser,
            'judul_blog' => $request->judulblog,
            'konten_blog' => $request->summernote,
        ]);
    
        Session::flash('message', "Blog berhasil ditambahkan");
        return Redirect::back();
    }

    public function editBlog($id)
    {
        $blog = Blog::where('id_blog', $id)
                ->first();

        $users = User::get();
       
        $page_title = 'Edit Blog Form';
        $page_description = 'Some description for the page';
        $logo = "teamo/images/aisyacatering_kontak_logo.png";
        $logoText = "teamo/images/aisya-catering-logo3.png";
        $action = __FUNCTION__;

        return view('viewSuperAdmin.userformeditBlog',compact('blog', 'users', 'page_title', 'page_description','action','logo','logoText') );

    }

    public function updateBlog(Request $request, $id)
    {
        $validator = $request->validate([
            'judulblog' => ['required', 'max:100'],
            'summernote' => ['required'],
        ],
        [
            'judulblog.required' => 'Mohon mengisi judul blog',
            'summernote.required' => 'Mohon mengisi konten blog',
            'judulblog.max' => 'Judul blog harus dibawah 100 karakter',
            'summernote.max' => 'Konten blog harus dibawah 65.535 karakter',
        ]
        );

        $model = Blog::find($id);
        $model->user_id = $request->input('cariuser');
        $model->judul_blog = $request->input('judulblog');
        $model->konten_blog = $request->input('summernote');
        $model->touch();
        $model->save();
        Session::flash('message', "Data blog berhasil diubah");
        return Redirect::back();
    }

    public function deleteBlog($id)
    {
        $model = Blog::find($id);
        $model->delete();

        Session::flash('message', "Data Blog {$model->judul_blog} berhasil dihapus");
        return Redirect::back();
    }

    public function trashedBlog()
    {
        // mengampil data  yang sudah dihapus
        $model = Blog::onlyTrashed()->get();

        $page_title = 'Trashed Blog Table';
        $page_description = 'Some description for the page';
        $logo = "teamo/images/aisyacatering_kontak_logo.png";
        $logoText = "teamo/images/aisya-catering-logo3.png";
        $action = __FUNCTION__;
        return view('viewSuperAdmin.tableTrashedBlog', compact('model', 'page_title', 'page_description','action','logo','logoText'));
    }

    public function restoreBlog($id)
    {
        $model = Blog::onlyTrashed()->where('id_blog',$id);
        $model->restore();

        Session::flash('message', "Data Blog berhasil dikembalikan");
        return Redirect::back();
    }

    public function restoreallBlog()
    {
            
        $model = Blog::onlyTrashed();
        $model->restore();
 
        Session::flash('message', "Semua data Blog berhasil dikembalikan");
        return Redirect::back();
    }


}
