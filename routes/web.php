<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome'); 
// }); //home KATALOG

// Route::get('/', function () {

//     return view('viewUser.mainCatalogue'); 
// }); //home KATALOG


Route::get('/', [App\Http\Controllers\HomeController::class, 'mainCatalogue'])->name('mainCatalogue'); 
// Route::get('/kontak', function () {
//     return view('layouts.kontak'); 
// }); //kontak
Route::get('/kontak', [App\Http\Controllers\CatalogController::class, 'kontak'])->name('kontak');
Route::get('/tentangkami', function () {
    return view('layouts.tentangkami'); 
}); //tentangkami
Route::get('/catalogproduct', [App\Http\Controllers\HomeController::class, 'gridprodTable']); //katalog produk grid
Route::get('/filterproduct', [App\Http\Controllers\HomeController::class, 'filterproduct']);
Route::get('/searchproduct', [App\Http\Controllers\HomeController::class, 'searchproduct']);
Route::get('/ketentuan', [App\Http\Controllers\HomeController::class, 'ketentuan']);



//MIDDLEWARE NEED LOGIN
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); 

//CART NEED LOGIN
Route::get('cart', [App\Http\Controllers\CartController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [App\Http\Controllers\CartController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [App\Http\Controllers\CartController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [App\Http\Controllers\CartController::class, 'remove'])->name('remove.from.cart');

Route::get('/keranjangBelanja', [App\Http\Controllers\CartController::class, 'keranjangBelanja']);
Route::get('/viewproduct/{id}', [App\Http\Controllers\HomeController::class, 'lihatproduk']);
Route::get('/checkout', [App\Http\Controllers\CartController::class, 'checkoutprod']);
Route::post('/StoreCheckout', [App\Http\Controllers\CartController::class, 'storecheckout']); 

Route::get('/Paket/COVID19', [App\Http\Controllers\HomeController::class, 'viewCOVID19']);
Route::get('/Paket/Wedding', [App\Http\Controllers\HomeController::class, 'viewWedding']);
Route::get('/Paket/Pemerintahan', [App\Http\Controllers\HomeController::class, 'viewPemerintahan']);
Route::get('/Paket/Pabrik', [App\Http\Controllers\HomeController::class, 'viewPabrik']);
Route::get('/Paket/TumpengHantaran', [App\Http\Controllers\HomeController::class, 'viewTumpengHantaran']);
Route::get('/Paket/SnackBox', [App\Http\Controllers\HomeController::class, 'viewSnackBox']);
Route::get('/Paket/RiceBox', [App\Http\Controllers\HomeController::class, 'viewRiceBox']);
Route::get('/Paket/Aqiqah', [App\Http\Controllers\HomeController::class, 'viewAqiqah']);
Route::get('/Paket/Ramadhan', [App\Http\Controllers\HomeController::class, 'viewRamadhan']);
Route::get('/Paket/Lebaran', [App\Http\Controllers\HomeController::class, 'viewLebaran']);
Route::get('/Paket/Khusus', [App\Http\Controllers\HomeController::class, 'viewKhusus']);
Route::get('/Brosur', function () {
	$filepath=public_path()."/Final.pdf";
	$filename="Katalog Aisya Catering Terbaru.pdf";
	$headers=array('Content-Type' => 'application/pdf');

	if(file_exists($filepath)){
        // Send Download
        return \Response::download( $filepath, $filename, $headers );
    } else {
        // Error
        exit( 'File yang diminta tidak ada di server kami!' );
    }
});
Route::get('/BrosurWedding', function () {
	$filepath=public_path()."/Brosur Wedding AISYA.pdf";
	$filename="Katalog Wedding Aisya Catering Terbaru.pdf";
	$headers=array('Content-Type' => 'application/pdf');

	if(file_exists($filepath)){
        // Send Download
        return \Response::download( $filepath, $filename, $headers );
    } else {
        // Error
        exit( 'File yang diminta tidak ada di server kami!' );
    }
});


Route::get('/gridblog', [App\Http\Controllers\HomeController::class, 'blog']);
Route::get('/readmoreblog/{id}', [App\Http\Controllers\HomeController::class, 'readmoreblog']);

Route::get('/edityourprofile', [App\Http\Controllers\UserController::class, 'edityourprofile'])->middleware('hak.akses:user');
Route::get('/seeyourorder', [App\Http\Controllers\UserController::class, 'seeyourorder'])->middleware('hak.akses:user');
Route::get('/seeyourpayment', [App\Http\Controllers\UserController::class, 'seeyourpayment'])->middleware('hak.akses:user');
Route::post('/updateyouruprofile/{id}', [App\Http\Controllers\UserController::class, 'updateyouruprofile'])->middleware('hak.akses:user');

Route::get('/seeyourdetailorder/{id}', [App\Http\Controllers\UserController::class, 'seeyourdetailorder'])->middleware('hak.akses:user');
Route::get('/edityourdetailorder/{id}', [App\Http\Controllers\UserController::class, 'edityourdetailorder'])->middleware('hak.akses:user');
Route::get('/updateyourdetailorder/{id}', [App\Http\Controllers\UserController::class, 'updateyourdetailorder'])->middleware('hak.akses:user');
Route::get('/cancelyourorder/{id}', [App\Http\Controllers\UserController::class, 'cancelyourorder'])->middleware('hak.akses:user'); 
Route::get('/addyourpayment/{id}', [App\Http\Controllers\UserController::class, 'addyourpayment'])->middleware('hak.akses:user'); 
Route::post('/storeyourpayment/{id}', [App\Http\Controllers\UserController::class, 'storeyourpayment'])->middleware('hak.akses:user');  
Route::get('/edityourpayment/{id}', [App\Http\Controllers\UserController::class, 'edityourpayment'])->middleware('hak.akses:user'); 
Route::post('/updateyourpayment/{id}', [App\Http\Controllers\UserController::class, 'updateyourpayment'])->middleware('hak.akses:user'); 



//COBA ROUTE
Route::get('/coba', [App\Http\Controllers\SuperAdminController::class, 'dashboard_1']);

//SUPER ADMIN
//maybe yang hak akses bisa di construct controller tetapi tetapiiii udah kadung semua itu tuh di super admin jadi ga bisa ngebagi pembayaran pemesanan
//but maybeeee yang di user bisa so lets gooo biar gak satu satu middleware route atau pake groupp aja belum pernah nyoba :)
Route::get('/superAdmin', [App\Http\Controllers\SuperAdminController::class, 'dashboard_1'])->middleware('hak.akses:superAdmin')->name('homeSuperAdmin');
Route::get('/UserTable', [App\Http\Controllers\SuperAdminController::class, 'viewusertable'])->middleware('hak.akses:superAdmin'); //lihat Table User dan Role
Route::get('/UserFormInput', [App\Http\Controllers\SuperAdminController::class, 'viewuserforminput'])->middleware('hak.akses:superAdmin'); //lihat form input user
Route::post('/AddUser', [App\Http\Controllers\SuperAdminController::class, 'storeuser'])->middleware('hak.akses:superAdmin'); // store data user ke DB
Route::get('/AddUserRole', [App\Http\Controllers\SuperAdminController::class, 'viewformaddroleuser'])->middleware('hak.akses:superAdmin'); //lihat form input user role
Route::post('/StoreUserRole', [App\Http\Controllers\SuperAdminController::class, 'storeuserrole'])->middleware('hak.akses:superAdmin');; // store data role user ke DB
Route::get('/EditUser/{id}', [App\Http\Controllers\SuperAdminController::class, 'edituser'])->middleware('hak.akses:superAdmin'); //lihat form edit role user
Route::post('/UpdateUser/{id}', [App\Http\Controllers\SuperAdminController::class, 'updateuser'])->middleware('hak.akses:superAdmin'); //update data form edit user ke DB
Route::get('/DeleteUser/{id}', [App\Http\Controllers\SuperAdminController::class, 'deleteuser'])->middleware('hak.akses:superAdmin'); //delete data form delete user ke DB
Route::get('/TrashedUser', [App\Http\Controllers\SuperAdminController::class, 'trasheduser'])->middleware('hak.akses:superAdmin'); //lihat data user di tong sampah
Route::get('/RestoreUser/{id}', [App\Http\Controllers\SuperAdminController::class, 'restoreuser'])->middleware('hak.akses:superAdmin'); //kembalikan data user dari tong sampah
Route::get('/DeletePermanentUser/{id}', [App\Http\Controllers\SuperAdminController::class, 'deletepermanentuser'])->middleware('hak.akses:superAdmin'); //hapus permanen data user dari tong sampah
Route::get('/RestoreAllUser', [App\Http\Controllers\SuperAdminController::class, 'restorealluser'])->middleware('hak.akses:superAdmin'); //kembalikan semua data user dari tong sampah
Route::get('/DeletePermanentAllUser', [App\Http\Controllers\SuperAdminController::class, 'deletepermanentalluser'])->middleware('hak.akses:superAdmin'); //hapus permanen semua data user dari tong sampah

Route::get('/CategoryTable', [App\Http\Controllers\SuperAdminController::class, 'viewcategorytable'])->middleware('hak.akses:superAdmin,adminPemesanan'); //lihat Table Category
Route::get('/ViewFormCategory', [App\Http\Controllers\SuperAdminController::class, 'viewcategoryforminput'])->middleware('hak.akses:superAdmin,adminPemesanan'); //lihat form input kategori
Route::post('/StoreCategory', [App\Http\Controllers\SuperAdminController::class, 'storecategory'])->middleware('hak.akses:superAdmin,adminPemesanan'); // store data user ke DB
Route::get('/EditCategory/{id}', [App\Http\Controllers\SuperAdminController::class, 'editcategory'])->middleware('hak.akses:superAdmin,adminPemesanan'); //lihat form edit kategori
Route::post('/UpdateCategory/{id}', [App\Http\Controllers\SuperAdminController::class, 'updatecategory'])->middleware('hak.akses:superAdmin,adminPemesanan'); //update data form edit kategori ke DB
Route::get('/DeleteCategory/{id}', [App\Http\Controllers\SuperAdminController::class, 'deletecategory'])->middleware('hak.akses:superAdmin,adminPemesanan'); //delete data form delete kategori ke DB
Route::get('/TrashedCategory', [App\Http\Controllers\SuperAdminController::class, 'trashedcategory'])->middleware('hak.akses:superAdmin,adminPemesanan'); //lihat data kategori di tong sampah
Route::get('/RestoreCategory/{id}', [App\Http\Controllers\SuperAdminController::class, 'restorecategory']); //kembalikan data kategori dari tong sampah
Route::get('/DeletePermanentCategory/{id}', [App\Http\Controllers\SuperAdminController::class, 'deletepermanentcategory'])->middleware('hak.akses:superAdmin'); //hapus permanen data kategori dari tong sampah
Route::get('/RestoreAllCategory', [App\Http\Controllers\SuperAdminController::class, 'restoreallcategory'])->middleware('hak.akses:superAdmin,adminPemesanan'); //kembalikan semua data kategori dari tong sampah
Route::get('/DeletePermanentAllCategory', [App\Http\Controllers\SuperAdminController::class, 'deletepermanentallcategory'])->middleware('hak.akses:superAdmin'); //hapus permanen semua data kategori dari tong sampah


Route::get('/ProductTable', [App\Http\Controllers\SuperAdminController::class, 'viewproducttable'])->middleware('hak.akses:superAdmin,adminPemesanan'); //lihat Table Product
Route::get('/getModalPhotoProduct/{id}', [App\Http\Controllers\SuperAdminController::class, 'getModalPhotoProduct'])->middleware('hak.akses:superAdmin,adminPemesanan'); //lihat Galeri Product per id
Route::get('/ViewFormProduct', [App\Http\Controllers\SuperAdminController::class, 'viewproductforminput'])->middleware('hak.akses:superAdmin,adminPemesanan'); //lihat form input produk
Route::post('/StoreProduct', [App\Http\Controllers\SuperAdminController::class, 'storeproduct'])->middleware('hak.akses:superAdmin,adminPemesanan'); // store data produk ke DB
Route::get('/EditProduct/{id}', [App\Http\Controllers\SuperAdminController::class, 'editproduct'])->middleware('hak.akses:superAdmin,adminPemesanan'); //lihat form edit produk
Route::post('/UpdateProduct/{id}', [App\Http\Controllers\SuperAdminController::class, 'updateproduct'])->middleware('hak.akses:superAdmin,adminPemesanan'); //update data form edit produk ke DB
Route::get('/DeleteProduct/{id}', [App\Http\Controllers\SuperAdminController::class, 'deleteproduct'])->middleware('hak.akses:superAdmin,adminPemesanan'); //delete data form delete produk ke DB
Route::get('/TrashedProduct', [App\Http\Controllers\SuperAdminController::class, 'trashedproduct'])->middleware('hak.akses:superAdmin,adminPemesanan'); //lihat data produk di tong sampah
Route::get('/RestoreProduct/{id}', [App\Http\Controllers\SuperAdminController::class, 'restoreproduct'])->middleware('hak.akses:superAdmin,adminPemesanan'); //kembalikan data produk dari tong sampah
Route::get('/DeletePermanent/{id}', [App\Http\Controllers\SuperAdminController::class, 'deletepermanent'])->middleware('hak.akses:superAdmin'); //hapus permanen data produk dari tong sampah
Route::get('/RestoreAllProduct', [App\Http\Controllers\SuperAdminController::class, 'restoreallproduct'])->middleware('hak.akses:superAdmin,adminPemesanan'); //kembalikan semua data produk dari tong sampah
Route::get('/DeletePermanentAllProduct', [App\Http\Controllers\SuperAdminController::class, 'deletepermanentallproduct'])->middleware('hak.akses:superAdmin'); //hapus permanen semua data produk dari tong sampah

Route::get('/dropzone/coba', [App\Http\Controllers\SuperAdminController::class, 'viewcobadropzone'])->middleware('hak.akses:superAdmin,adminPemesanan');;
//Route::post('/dropzone/storecoba', [App\Http\Controllers\SuperAdminController::class, 'dropzoneCobaStore'])->name('dropzone.upload');

Route::get('/dropzoneview/{id}', [App\Http\Controllers\SuperAdminController::class, 'dropzoneView'])->middleware('hak.akses:superAdmin,adminPemesanan')->name('dropzone.view');
Route::post('/dropzone/store/{id}', [App\Http\Controllers\SuperAdminController::class, 'dropzoneStore'])->middleware('hak.akses:superAdmin,adminPemesanan')->name('dropzone.upload');
Route::get('/dropzone/fetch', [App\Http\Controllers\SuperAdminController::class, 'dropzoneFetch'])->middleware('hak.akses:superAdmin,adminPemesanan')->name('dropzone.fetch');
Route::get('/dropzone/delete', [App\Http\Controllers\SuperAdminController::class, 'dropzoneDelete'])->middleware('hak.akses:superAdmin,adminPemesanan')->name('dropzone.delete');
Route::get('/deleteImage/{id}', [App\Http\Controllers\SuperAdminController::class, 'deleteImageProduct'])->middleware('hak.akses:superAdmin,adminPemesanan');

Route::get('/PemesananTable', [App\Http\Controllers\SuperAdminController::class, 'viewpemesanantable'])->middleware('hak.akses:superAdmin,adminPemesanan'); //lihat Table Pemesanan
Route::get('/ViewFormPemesanan', [App\Http\Controllers\SuperAdminController::class, 'viewformpemesanan'])->middleware('hak.akses:superAdmin,adminPemesanan'); //lihat form
Route::get('/cariUser', [App\Http\Controllers\SuperAdminController::class, 'loadDataUser'])->middleware('hak.akses:superAdmin,adminPemesanan'); //lihat ajax select2
Route::get('/cariProduk', [App\Http\Controllers\SuperAdminController::class,'loadDataProduk'])->middleware('hak.akses:superAdmin,adminPemesanan');
Route::post('/StorePemesanan', [App\Http\Controllers\SuperAdminController::class, 'storePemesanan'])->middleware('hak.akses:superAdmin,adminPemesanan'); // store data pemesanan dan detail ke DB

Route::get('/EditOrder/{id}', [App\Http\Controllers\SuperAdminController::class, 'EditOrder'])->middleware('hak.akses:superAdmin,adminPemesanan'); //lihat form edit order
Route::post('/UpdateOrder/{id}', [App\Http\Controllers\SuperAdminController::class, 'UpdateOrder'])->middleware('hak.akses:superAdmin,adminPemesanan'); //update data form edit order ke DB
Route::get('/Invoice/{id}', [App\Http\Controllers\SuperAdminController::class, 'Invoice'])->middleware('hak.akses:superAdmin,adminPemesanan'); // lihat invoice

Route::post('/accept/{id}', [App\Http\Controllers\SuperAdminController::class, 'acceptorder'])->middleware('hak.akses:superAdmin,adminPemesanan'); //change status order into accept
Route::post('/reject/{id}', [App\Http\Controllers\SuperAdminController::class, 'rejectorder'])->middleware('hak.akses:superAdmin,adminPemesanan'); //change status order into reject
Route::post('/confirm/{id}', [App\Http\Controllers\SuperAdminController::class, 'confirmorder'])->middleware('hak.akses:superAdmin,adminPemesanan'); //change status order into confirm
Route::get('/DeleteOrder/{id}', [App\Http\Controllers\SuperAdminController::class, 'deleteOrder'])->middleware('hak.akses:superAdmin,adminPemesanan'); //delete data form delete order ke DB
Route::get('/TrashedOrder', [App\Http\Controllers\SuperAdminController::class, 'trashedOrder'])->middleware('hak.akses:superAdmin,adminPemesanan'); //lihat data order di tong sampah
Route::get('/RestoreOrder/{id}', [App\Http\Controllers\SuperAdminController::class, 'restoreOrder'])->middleware('hak.akses:superAdmin,adminPemesanan'); //kembalikan data order dari tong sampah
Route::get('/DeletePermanentOrder/{id}', [App\Http\Controllers\SuperAdminController::class, 'deletepermanentOrder'])->middleware('hak.akses:superAdmin'); //hapus permanen data order dari tong sampah
Route::get('/RestoreAllOrder', [App\Http\Controllers\SuperAdminController::class, 'restoreallOrder'])->middleware('hak.akses:superAdmin,adminPemesanan'); //kembalikan semua data order dari tong sampah
Route::get('/DeletePermanentAllOrder', [App\Http\Controllers\SuperAdminController::class, 'deletepermanentallOrder'])->middleware('hak.akses:superAdmin'); //hapus permanen semua data order dari tong sampah

Route::get('/OrderDiterima', [App\Http\Controllers\SuperAdminController::class, 'orderDiterimaTable'])->middleware('hak.akses:superAdmin,adminPemesanan,adminPembayaran'); //lihat Table Pemesanan
Route::post('/notyet/{id}', [App\Http\Controllers\SuperAdminController::class, 'notyet'])->middleware('hak.akses:superAdmin,adminPemesanan'); //change status order into notyet
Route::post('/inprocess/{id}', [App\Http\Controllers\SuperAdminController::class, 'inprocess'])->middleware('hak.akses:superAdmin,adminPemesanan'); //change status order into inprocess
Route::post('/insend/{id}', [App\Http\Controllers\SuperAdminController::class, 'insend'])->middleware('hak.akses:superAdmin,adminPemesanan'); //change status order into insend
Route::post('/done/{id}', [App\Http\Controllers\SuperAdminController::class, 'done'])->middleware('hak.akses:superAdmin,adminPemesanan'); //change status order into done
Route::get('/LihatDetailOrder/{id}', [App\Http\Controllers\SuperAdminController::class, 'viewdetailorder'])->middleware('hak.akses:superAdmin,adminPemesanan'); //lihat detail order 


Route::get('/Rekap', [App\Http\Controllers\SuperAdminController::class, 'rekapOrderanBesok'])->middleware('hak.akses:superAdmin,adminPemesanan'); //lihat Table Pemesanan

Route::get('/OrderCalendar', [App\Http\Controllers\SuperAdminController::class, 'OrderCalendar'])->middleware('hak.akses:superAdmin,adminPemesanan'); //lihat Kalender Pemesanan

Route::get('/Payment/{id}', [App\Http\Controllers\SuperAdminController::class, 'paymentIDtable'])->middleware('hak.akses:superAdmin,adminPemesanan,adminPembayaran'); // lihat pembayaran per ID pemesanan
Route::get('/AddPayment/{id}', [App\Http\Controllers\SuperAdminController::class, 'addpaymentIDtable'])->middleware('hak.akses:superAdmin,adminPembayaran'); 
Route::post('/storepaymentID', [App\Http\Controllers\SuperAdminController::class, 'storepaymentID'])->middleware('hak.akses:superAdmin,adminPembayaran'); // store data pembayaran ke DB
Route::get('/DeletePayment/{id}', [App\Http\Controllers\SuperAdminController::class, 'deletePayment'])->middleware('hak.akses:superAdmin,adminPembayaran'); //delete data form delete Payment ke DB
Route::get('/TrashedPayment/{id}', [App\Http\Controllers\SuperAdminController::class, 'trashedPaymentID'])->middleware('hak.akses:superAdmin,adminPembayaran'); //lihat data Payment di tong sampah
Route::get('/RestorePayment/{id}', [App\Http\Controllers\SuperAdminController::class, 'restorePayment'])->middleware('hak.akses:superAdmin,adminPembayaran'); //kembalikan data Payment dari tong sampah
Route::get('/RestoreAllPayment', [App\Http\Controllers\SuperAdminController::class, 'restoreallPayment'])->middleware('hak.akses:superAdmin,adminPembayaran'); //kembalikan semua data Payment dari tong sampah
Route::get('/RestoreAllPaymentSPO/{id}', [App\Http\Controllers\SuperAdminController::class, 'restoreallPaymentSPO'])->middleware('hak.akses:superAdmin,adminPembayaran'); //kembalikan semua data Payment spesifik id pemesanan dari tong sampah

Route::post('/changeStatusConfirm/{id}', [App\Http\Controllers\SuperAdminController::class, 'changeConfirmStatusPayment'])->middleware('hak.akses:superAdmin,adminPembayaran'); //change status konfirmasi pembayaran

Route::get('/PaymentTable', [App\Http\Controllers\SuperAdminController::class, 'tablePembayaranAll'])->middleware('hak.akses:superAdmin,adminPemesanan,adminPembayaran');
Route::get('/AddPayment', [App\Http\Controllers\SuperAdminController::class, 'addpaymentinAll'])->middleware('hak.akses:superAdmin,adminPembayaran'); 
Route::get('/TrashedPayment', [App\Http\Controllers\SuperAdminController::class, 'trashedPaymentinAll'])->middleware('hak.akses:superAdmin,adminPembayaran'); //lihat data Payment all di tong sampah

Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->middleware('hak.akses:user')->name('homeUser');
Route::get('/adminPemesanan', [App\Http\Controllers\AdminPemesananController::class, 'indexAdPem'])->middleware('hak.akses:adminPemesanan')->name('homeAdminPemesanan');
Route::get('/adminPembayaran', [App\Http\Controllers\AdminPembayaranController::class, 'indexAdPembayaran'])->middleware('hak.akses:adminPembayaran')->name('homeAdminPembayaran');
Route::get('/adminBlog', [App\Http\Controllers\AdminBlogController::class, 'indexAdBlog'])->middleware('hak.akses:adminBlog')->name('homeAdminBlog');
Route::get('/getdataproduk/{id}', [App\Http\Controllers\SuperAdminController::class,'getdataproduk'])->middleware('hak.akses:superAdmin,adminPemesanan');



Route::get('/BlogTable', [App\Http\Controllers\SuperAdminController::class, 'blogTable'])->middleware('hak.akses:superAdmin,adminBlog');
Route::get('/BlogTableASC', [App\Http\Controllers\SuperAdminController::class, 'blogTableASC'])->middleware('hak.akses:superAdmin,adminBlog');
Route::get('/blogForm', [App\Http\Controllers\SuperAdminController::class, 'blogForm'])->middleware('hak.akses:superAdmin,adminBlog');
Route::post('/StoreBlog', [App\Http\Controllers\SuperAdminController::class, 'storeBlog'])->middleware('hak.akses:superAdmin,adminBlog');
Route::get('/blog/{id}', [App\Http\Controllers\SuperAdminController::class, 'showBlog'])->middleware('hak.akses:superAdmin,adminBlog');
Route::get('/EditBlog/{id}', [App\Http\Controllers\SuperAdminController::class, 'EditBlog'])->middleware('hak.akses:superAdmin,adminBlog'); //lihat form edit Blog
Route::post('/UpdateBlog/{id}', [App\Http\Controllers\SuperAdminController::class, 'UpdateBlog'])->middleware('hak.akses:superAdmin,adminBlog'); //update data form edit Blog ke DB
Route::get('/DeleteBlog/{id}', [App\Http\Controllers\SuperAdminController::class, 'deleteBlog'])->middleware('hak.akses:superAdmin,adminBlog'); //delete data form delete blog ke DB
Route::get('/TrashedBlog', [App\Http\Controllers\SuperAdminController::class, 'trashedBlog'])->middleware('hak.akses:superAdmin,adminBlog'); //lihat data blog di tong sampah
Route::get('/RestoreBlog/{id}', [App\Http\Controllers\SuperAdminController::class, 'restoreBlog'])->middleware('hak.akses:superAdmin,adminBlog'); //kembalikan data blog dari tong sampah
Route::get('/RestoreAllBlog', [App\Http\Controllers\SuperAdminController::class, 'restoreallBlog'])->middleware('hak.akses:superAdmin,adminBlog'); //kembalikan semua data blog dari tong sampah


Route::get('/uprof', [App\Http\Controllers\SuperAdminController::class, 'edituprof']); //lihat form edit profil
Route::post('/uprofupdate/{id}', [App\Http\Controllers\SuperAdminController::class, 'updateuprof']); //update data form edit produk ke DB


// Route::get('/davurdash', [App\Http\Controllers\DavuradminController::class, 'dashboard_1']);
// Route::get('/index', [App\Http\Controllers\DavuradminController::class, 'dashboard_1']);
// Route::get('/page-analytics', [App\Http\Controllers\DavuradminController::class, 'analytics']);
// Route::get('/page-order', [App\Http\Controllers\DavuradminController::class,'order']);
// Route::get('/page-order-list', [App\Http\Controllers\DavuradminController::class,'order_list']);
// Route::get('/page-review', [App\Http\Controllers\DavuradminController::class,'review']);
// Route::get('/page-general-customers', [App\Http\Controllers\DavuradminController::class,'general_customers']);
// Route::get('/app-calender', [App\Http\Controllers\DavuradminController::class,'app_calender']);
// Route::get('/app-profile', [App\Http\Controllers\DavuradminController::class,'app_profile']);
// Route::get('/chart-chartist', [App\Http\Controllers\DavuradminController::class,'chart_chartist']);
// Route::get('/chart-chartjs', [App\Http\Controllers\DavuradminController::class,'chart_chartjs']);
// Route::get('/chart-flot', [App\Http\Controllers\DavuradminController::class,'chart_flot']);
// Route::get('/chart-morris', [App\Http\Controllers\DavuradminController::class,'chart_morris']);
// Route::get('/chart-peity', [App\Http\Controllers\DavuradminController::class,'chart_peity']);
// Route::get('/chart-sparkline', [App\Http\Controllers\DavuradminController::class,'chart_sparkline']);
// Route::get('/ecom-checkout', [App\Http\Controllers\DavuradminController::class,'ecom_checkout']);
// Route::get('/ecom-customers', [App\Http\Controllers\DavuradminController::class,'ecom_customers']);
// Route::get('/ecom-invoice', [App\Http\Controllers\DavuradminController::class,'ecom_invoice']);
// Route::get('/ecom-product-detail', [App\Http\Controllers\DavuradminController::class,'ecom_product_detail']);
// Route::get('/ecom-product-grid', [App\Http\Controllers\DavuradminController::class,'ecom_product_grid']);
// Route::get('/ecom-product-list', [App\Http\Controllers\DavuradminController::class,'ecom_product_list']);
// Route::get('/ecom-product-order', [App\Http\Controllers\DavuradminController::class,'ecom_product_order']);
// Route::get('/email-compose', [App\Http\Controllers\DavuradminController::class,'email_compose']);
// Route::get('/email-inbox', [App\Http\Controllers\DavuradminController::class,'email_inbox']);
// Route::get('/email-read', [App\Http\Controllers\DavuradminController::class,'email_read']);
// Route::get('/form-editor-summernote', [App\Http\Controllers\DavuradminController::class,'form_editor_summernote']);
// Route::get('/form-element', [App\Http\Controllers\DavuradminController::class,'form_element']);
// Route::get('/form-pickers', [App\Http\Controllers\DavuradminController::class,'form_pickers']);
// Route::get('/form-validation-jquery', [App\Http\Controllers\DavuradminController::class,'form_validation_jquery']);
// Route::get('/form-wizard', [App\Http\Controllers\DavuradminController::class,'form_wizard']);
// Route::get('/map-jqvmap', [App\Http\Controllers\DavuradminController::class,'map_jqvmap']);
// Route::get('/page-error-400', [App\Http\Controllers\DavuradminController::class,'page_error_400']);
// Route::get('/page-error-403', [App\Http\Controllers\DavuradminController::class,'page_error_403']);
// Route::get('/page-error-404', [App\Http\Controllers\DavuradminController::class,'page_error_404']);
// Route::get('/page-error-500', [App\Http\Controllers\DavuradminController::class,'page_error_500']);
// Route::get('/page-error-503', [App\Http\Controllers\DavuradminController::class,'page_error_503']);
// Route::get('/page-forgot-password', [App\Http\Controllers\DavuradminController::class,'page_forgot_password']);
// Route::get('/page-lock-screen', [App\Http\Controllers\DavuradminController::class,'page_lock_screen']);
// Route::get('/page-login', [App\Http\Controllers\DavuradminController::class,'page_login']);
// Route::get('/page-register', [App\Http\Controllers\DavuradminController::class,'page_register']);
// Route::get('/table-bootstrap-basic', [App\Http\Controllers\DavuradminController::class,'table_bootstrap_basic']);
// Route::get('/table-datatable-basic', [App\Http\Controllers\DavuradminController::class,'table_datatable_basic']);
// Route::get('/uc-nestable', [App\Http\Controllers\DavuradminController::class,'uc_nestable']);
// Route::get('/uc-noui-slider', [App\Http\Controllers\DavuradminController::class,'uc_noui_slider']);
// Route::get('/uc-select2', [App\Http\Controllers\DavuradminController::class,'uc_select2']);
// Route::get('/uc-sweetalert', [App\Http\Controllers\DavuradminController::class,'uc_sweetalert']);
// Route::get('/uc-toastr', [App\Http\Controllers\DavuradminController::class,'uc_toastr']);
// Route::get('/ui-accordion', [App\Http\Controllers\DavuradminController::class,'ui_accordion']);
// Route::get('/ui-alert', [App\Http\Controllers\DavuradminController::class,'ui_alert']);
// Route::get('/ui-badge', [App\Http\Controllers\DavuradminController::class,'ui_badge']);
// Route::get('/ui-button', [App\Http\Controllers\DavuradminController::class,'ui_button']);
// Route::get('/ui-button-group', [App\Http\Controllers\DavuradminController::class,'ui_button_group']);
// Route::get('/ui-card', [App\Http\Controllers\DavuradminController::class,'ui_card']);
// Route::get('/ui-carousel', [App\Http\Controllers\DavuradminController::class,'ui_carousel']);
// Route::get('/ui-dropdown', [App\Http\Controllers\DavuradminController::class,'ui_dropdown']);
// Route::get('/ui-grid', [App\Http\Controllers\DavuradminController::class,'ui_grid']);
// Route::get('/ui-list-group', [App\Http\Controllers\DavuradminController::class,'ui_list_group']);
// Route::get('/ui-media-object', [App\Http\Controllers\DavuradminController::class,'ui_media_object']);
// Route::get('/ui-modal', [App\Http\Controllers\DavuradminController::class,'ui_modal']);
// Route::get('/ui-pagination', [App\Http\Controllers\DavuradminController::class,'ui_pagination']);
// Route::get('/ui-popover', [App\Http\Controllers\DavuradminController::class,'ui_popover']);
// Route::get('/ui-progressbar', [App\Http\Controllers\DavuradminController::class,'ui_progressbar']);
// Route::get('/ui-tab', [App\Http\Controllers\DavuradminController::class,'ui_tab']);
// Route::get('/ui-typography', [App\Http\Controllers\DavuradminController::class,'ui_typography']);
// Route::get('/widget-basic', [App\Http\Controllers\DavuradminController::class,'widget_basic']);