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
Route::get('/Brosur', [App\Http\Controllers\HomeController::class, '']);


Route::get('/gridblog', [App\Http\Controllers\HomeController::class, 'blog']);
Route::get('/readmoreblog/{id}', [App\Http\Controllers\HomeController::class, 'readmoreblog']);

Route::get('/edityourprofile', [App\Http\Controllers\UserController::class, 'edityourprofile']);
Route::get('/seeyourorder', [App\Http\Controllers\UserController::class, 'seeyourorder']);
Route::get('/seeyourpayment', [App\Http\Controllers\UserController::class, 'seeyourpayment']);
Route::post('/updateyouruprofile/{id}', [App\Http\Controllers\UserController::class, 'updateyouruprofile']);

Route::get('/seeyourdetailorder/{id}', [App\Http\Controllers\UserController::class, 'seeyourdetailorder']);
Route::get('/edityourdetailorder/{id}', [App\Http\Controllers\UserController::class, 'edityourdetailorder']);
Route::get('/updateyourdetailorder/{id}', [App\Http\Controllers\UserController::class, 'updateyourdetailorder']);
Route::get('/cancelyourorder/{id}', [App\Http\Controllers\UserController::class, 'cancelyourorder']); 
Route::get('/addyourpayment/{id}', [App\Http\Controllers\UserController::class, 'addyourpayment']); 
Route::get('/storeyourpayment/{id}', [App\Http\Controllers\UserController::class, 'storeyourpayment']); 


//COBA ROUTE
Route::get('/coba', [App\Http\Controllers\SuperAdminController::class, 'dashboard_1']);

//SUPER ADMIN
Route::get('/superAdmin', [App\Http\Controllers\SuperAdminController::class, 'dashboard_1'])->name('homeSuperAdmin');
Route::get('/UserTable', [App\Http\Controllers\SuperAdminController::class, 'viewusertable']); //lihat Table User dan Role
Route::get('/UserFormInput', [App\Http\Controllers\SuperAdminController::class, 'viewuserforminput']); //lihat form input user
Route::post('/AddUser', [App\Http\Controllers\SuperAdminController::class, 'storeuser']); // store data user ke DB
Route::get('/AddUserRole', [App\Http\Controllers\SuperAdminController::class, 'viewformaddroleuser']); //lihat form input user role
Route::post('/StoreUserRole', [App\Http\Controllers\SuperAdminController::class, 'storeuserrole']); // store data role user ke DB
Route::get('/EditUser/{id}', [App\Http\Controllers\SuperAdminController::class, 'edituser']); //lihat form edit role user
Route::post('/UpdateUser/{id}', [App\Http\Controllers\SuperAdminController::class, 'updateuser']); //update data form edit user ke DB
Route::get('/DeleteUser/{id}', [App\Http\Controllers\SuperAdminController::class, 'deleteuser']); //delete data form delete user ke DB
Route::get('/TrashedUser', [App\Http\Controllers\SuperAdminController::class, 'trasheduser']); //lihat data user di tong sampah
Route::get('/RestoreUser/{id}', [App\Http\Controllers\SuperAdminController::class, 'restoreuser']); //kembalikan data user dari tong sampah
Route::get('/DeletePermanentUser/{id}', [App\Http\Controllers\SuperAdminController::class, 'deletepermanentuser']); //hapus permanen data user dari tong sampah
Route::get('/RestoreAllUser', [App\Http\Controllers\SuperAdminController::class, 'restorealluser']); //kembalikan semua data user dari tong sampah
Route::get('/DeletePermanentAllUser', [App\Http\Controllers\SuperAdminController::class, 'deletepermanentalluser']); //hapus permanen semua data user dari tong sampah

Route::get('/CategoryTable', [App\Http\Controllers\SuperAdminController::class, 'viewcategorytable']); //lihat Table Category
Route::get('/ViewFormCategory', [App\Http\Controllers\SuperAdminController::class, 'viewcategoryforminput']); //lihat form input kategori
Route::post('/StoreCategory', [App\Http\Controllers\SuperAdminController::class, 'storecategory']); // store data user ke DB
Route::get('/EditCategory/{id}', [App\Http\Controllers\SuperAdminController::class, 'editcategory']); //lihat form edit kategori
Route::post('/UpdateCategory/{id}', [App\Http\Controllers\SuperAdminController::class, 'updatecategory']); //update data form edit kategori ke DB
Route::get('/DeleteCategory/{id}', [App\Http\Controllers\SuperAdminController::class, 'deletecategory']); //delete data form delete kategori ke DB
Route::get('/TrashedCategory', [App\Http\Controllers\SuperAdminController::class, 'trashedcategory']); //lihat data kategori di tong sampah
Route::get('/RestoreCategory/{id}', [App\Http\Controllers\SuperAdminController::class, 'restorecategory']); //kembalikan data kategori dari tong sampah
Route::get('/DeletePermanentCategory/{id}', [App\Http\Controllers\SuperAdminController::class, 'deletepermanentcategory']); //hapus permanen data kategori dari tong sampah
Route::get('/RestoreAllCategory', [App\Http\Controllers\SuperAdminController::class, 'restoreallcategory']); //kembalikan semua data kategori dari tong sampah
Route::get('/DeletePermanentAllCategory', [App\Http\Controllers\SuperAdminController::class, 'deletepermanentallcategory']); //hapus permanen semua data kategori dari tong sampah


Route::get('/ProductTable', [App\Http\Controllers\SuperAdminController::class, 'viewproducttable']); //lihat Table Product
Route::get('/getModalPhotoProduct/{id}', [App\Http\Controllers\SuperAdminController::class, 'getModalPhotoProduct']); //lihat Galeri Product per id
Route::get('/ViewFormProduct', [App\Http\Controllers\SuperAdminController::class, 'viewproductforminput']); //lihat form input produk
Route::post('/StoreProduct', [App\Http\Controllers\SuperAdminController::class, 'storeproduct']); // store data produk ke DB
Route::get('/EditProduct/{id}', [App\Http\Controllers\SuperAdminController::class, 'editproduct']); //lihat form edit produk
Route::post('/UpdateProduct/{id}', [App\Http\Controllers\SuperAdminController::class, 'updateproduct']); //update data form edit produk ke DB
Route::get('/DeleteProduct/{id}', [App\Http\Controllers\SuperAdminController::class, 'deleteproduct']); //delete data form delete produk ke DB
Route::get('/TrashedProduct', [App\Http\Controllers\SuperAdminController::class, 'trashedproduct']); //lihat data produk di tong sampah
Route::get('/RestoreProduct/{id}', [App\Http\Controllers\SuperAdminController::class, 'restoreproduct']); //kembalikan data produk dari tong sampah
Route::get('/DeletePermanent/{id}', [App\Http\Controllers\SuperAdminController::class, 'deletepermanent']); //hapus permanen data produk dari tong sampah
Route::get('/RestoreAllProduct', [App\Http\Controllers\SuperAdminController::class, 'restoreallproduct']); //kembalikan semua data produk dari tong sampah
Route::get('/DeletePermanentAllProduct', [App\Http\Controllers\SuperAdminController::class, 'deletepermanentallproduct']); //hapus permanen semua data produk dari tong sampah

Route::get('/dropzone/coba', [App\Http\Controllers\SuperAdminController::class, 'viewcobadropzone']);
//Route::post('/dropzone/storecoba', [App\Http\Controllers\SuperAdminController::class, 'dropzoneCobaStore'])->name('dropzone.upload');

Route::get('/dropzoneview/{id}', [App\Http\Controllers\SuperAdminController::class, 'dropzoneView'])->name('dropzone.view');
Route::post('/dropzone/store/{id}', [App\Http\Controllers\SuperAdminController::class, 'dropzoneStore'])->name('dropzone.upload');
Route::get('/dropzone/fetch', [App\Http\Controllers\SuperAdminController::class, 'dropzoneFetch'])->name('dropzone.fetch');
Route::get('/dropzone/delete', [App\Http\Controllers\SuperAdminController::class, 'dropzoneDelete'])->name('dropzone.delete');
Route::get('/deleteImage/{id}', [App\Http\Controllers\SuperAdminController::class, 'deleteImageProduct']);

Route::get('/PemesananTable', [App\Http\Controllers\SuperAdminController::class, 'viewpemesanantable']); //lihat Table Pemesanan
Route::get('/ViewFormPemesanan', [App\Http\Controllers\SuperAdminController::class, 'viewformpemesanan']); //lihat form
Route::get('/cariUser', [App\Http\Controllers\SuperAdminController::class, 'loadDataUser']); //lihat ajax select2
Route::get('/cariProduk', [App\Http\Controllers\SuperAdminController::class,'loadDataProduk']);
Route::post('/StorePemesanan', [App\Http\Controllers\SuperAdminController::class, 'storePemesanan']); // store data pemesanan dan detail ke DB

Route::get('/EditOrder/{id}', [App\Http\Controllers\SuperAdminController::class, 'EditOrder']); //lihat form edit order
Route::post('/UpdateOrder/{id}', [App\Http\Controllers\SuperAdminController::class, 'UpdateOrder']); //update data form edit order ke DB
Route::get('/Invoice/{id}', [App\Http\Controllers\SuperAdminController::class, 'Invoice']); // lihat invoice

Route::post('/accept/{id}', [App\Http\Controllers\SuperAdminController::class, 'acceptorder']); //change status order into accept
Route::post('/reject/{id}', [App\Http\Controllers\SuperAdminController::class, 'rejectorder']); //change status order into reject
Route::post('/confirm/{id}', [App\Http\Controllers\SuperAdminController::class, 'confirmorder']); //change status order into confirm
Route::get('/DeleteOrder/{id}', [App\Http\Controllers\SuperAdminController::class, 'deleteOrder']); //delete data form delete order ke DB
Route::get('/TrashedOrder', [App\Http\Controllers\SuperAdminController::class, 'trashedOrder']); //lihat data order di tong sampah
Route::get('/RestoreOrder/{id}', [App\Http\Controllers\SuperAdminController::class, 'restoreOrder']); //kembalikan data order dari tong sampah
Route::get('/DeletePermanentOrder/{id}', [App\Http\Controllers\SuperAdminController::class, 'deletepermanentOrder']); //hapus permanen data order dari tong sampah
Route::get('/RestoreAllOrder', [App\Http\Controllers\SuperAdminController::class, 'restoreallOrder']); //kembalikan semua data order dari tong sampah
Route::get('/DeletePermanentAllOrder', [App\Http\Controllers\SuperAdminController::class, 'deletepermanentallOrder']); //hapus permanen semua data order dari tong sampah

Route::get('/OrderDiterima', [App\Http\Controllers\SuperAdminController::class, 'orderDiterimaTable']); //lihat Table Pemesanan
Route::post('/notyet/{id}', [App\Http\Controllers\SuperAdminController::class, 'notyet']); //change status order into notyet
Route::post('/inprocess/{id}', [App\Http\Controllers\SuperAdminController::class, 'inprocess']); //change status order into inprocess
Route::post('/insend/{id}', [App\Http\Controllers\SuperAdminController::class, 'insend']); //change status order into insend
Route::post('/done/{id}', [App\Http\Controllers\SuperAdminController::class, 'done']); //change status order into done
Route::get('/LihatDetailOrder/{id}', [App\Http\Controllers\SuperAdminController::class, 'viewdetailorder']); //lihat detail order 

Route::get('/OrderCalendar', [App\Http\Controllers\SuperAdminController::class, 'OrderCalendar']); //lihat Kalender Pemesanan

Route::get('/Payment/{id}', [App\Http\Controllers\SuperAdminController::class, 'paymentIDtable']); // lihat pembayaran per ID pemesanan
Route::get('/AddPayment/{id}', [App\Http\Controllers\SuperAdminController::class, 'addpaymentIDtable']); 
Route::post('/storepaymentID', [App\Http\Controllers\SuperAdminController::class, 'storepaymentID']); // store data pembayaran ke DB
Route::get('/DeletePayment/{id}', [App\Http\Controllers\SuperAdminController::class, 'deletePayment']); //delete data form delete Payment ke DB
Route::get('/TrashedPayment/{id}', [App\Http\Controllers\SuperAdminController::class, 'trashedPaymentID']); //lihat data Payment di tong sampah
Route::get('/RestorePayment/{id}', [App\Http\Controllers\SuperAdminController::class, 'restorePayment']); //kembalikan data Payment dari tong sampah
Route::get('/RestoreAllPayment', [App\Http\Controllers\SuperAdminController::class, 'restoreallPayment']); //kembalikan semua data Payment dari tong sampah
Route::get('/RestoreAllPaymentSPO/{id}', [App\Http\Controllers\SuperAdminController::class, 'restoreallPaymentSPO']); //kembalikan semua data Payment spesifik id pemesanan dari tong sampah

Route::post('/changeStatusConfirm/{id}', [App\Http\Controllers\SuperAdminController::class, 'changeConfirmStatusPayment']); //change status konfirmasi pembayaran

Route::get('/PaymentTable', [App\Http\Controllers\SuperAdminController::class, 'tablePembayaranAll']);
Route::get('/AddPayment', [App\Http\Controllers\SuperAdminController::class, 'addpaymentinAll']); 
Route::get('/TrashedPayment', [App\Http\Controllers\SuperAdminController::class, 'trashedPaymentinAll']); //lihat data Payment all di tong sampah

Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('homeUser');
Route::get('/adminPemesanan', [App\Http\Controllers\AdminPemesananController::class, 'index'])->name('homeAdminPemesanan');
Route::get('/adminPembayaran', [App\Http\Controllers\AdminPembayaranController::class, 'index'])->name('homeAdminPembayaran');
Route::get('/getdataproduk/{id}', [App\Http\Controllers\SuperAdminController::class,'getdataproduk']);



Route::get('/BlogTable', [App\Http\Controllers\SuperAdminController::class, 'blogTable']);
Route::get('/BlogTableASC', [App\Http\Controllers\SuperAdminController::class, 'blogTableASC']);
Route::get('/blogForm', [App\Http\Controllers\SuperAdminController::class, 'blogForm']);
Route::post('/StoreBlog', [App\Http\Controllers\SuperAdminController::class, 'storeBlog']);
Route::get('/blog/{id}', [App\Http\Controllers\SuperAdminController::class, 'showBlog']);
Route::get('/EditBlog/{id}', [App\Http\Controllers\SuperAdminController::class, 'EditBlog']); //lihat form edit Blog
Route::post('/UpdateBlog/{id}', [App\Http\Controllers\SuperAdminController::class, 'UpdateBlog']); //update data form edit Blog ke DB
Route::get('/DeleteBlog/{id}', [App\Http\Controllers\SuperAdminController::class, 'deleteBlog']); //delete data form delete blog ke DB
Route::get('/TrashedBlog', [App\Http\Controllers\SuperAdminController::class, 'trashedBlog']); //lihat data blog di tong sampah
Route::get('/RestoreBlog/{id}', [App\Http\Controllers\SuperAdminController::class, 'restoreBlog']); //kembalikan data blog dari tong sampah
Route::get('/RestoreAllBlog', [App\Http\Controllers\SuperAdminController::class, 'restoreallBlog']); //kembalikan semua data blog dari tong sampah


Route::get('/uprof', [App\Http\Controllers\SuperAdminController::class, 'edituprof']); //lihat form edit profil
Route::post('/uprofupdate/{id}', [App\Http\Controllers\SuperAdminController::class, 'updateuprof']); //update data form edit produk ke DB


Route::get('/davurdash', [App\Http\Controllers\DavuradminController::class, 'dashboard_1']);
Route::get('/index', [App\Http\Controllers\DavuradminController::class, 'dashboard_1']);
Route::get('/page-analytics', [App\Http\Controllers\DavuradminController::class, 'analytics']);
Route::get('/page-order', [App\Http\Controllers\DavuradminController::class,'order']);
Route::get('/page-order-list', [App\Http\Controllers\DavuradminController::class,'order_list']);
Route::get('/page-review', [App\Http\Controllers\DavuradminController::class,'review']);
Route::get('/page-general-customers', [App\Http\Controllers\DavuradminController::class,'general_customers']);
Route::get('/app-calender', [App\Http\Controllers\DavuradminController::class,'app_calender']);
Route::get('/app-profile', [App\Http\Controllers\DavuradminController::class,'app_profile']);
Route::get('/chart-chartist', [App\Http\Controllers\DavuradminController::class,'chart_chartist']);
Route::get('/chart-chartjs', [App\Http\Controllers\DavuradminController::class,'chart_chartjs']);
Route::get('/chart-flot', [App\Http\Controllers\DavuradminController::class,'chart_flot']);
Route::get('/chart-morris', [App\Http\Controllers\DavuradminController::class,'chart_morris']);
Route::get('/chart-peity', [App\Http\Controllers\DavuradminController::class,'chart_peity']);
Route::get('/chart-sparkline', [App\Http\Controllers\DavuradminController::class,'chart_sparkline']);
Route::get('/ecom-checkout', [App\Http\Controllers\DavuradminController::class,'ecom_checkout']);
Route::get('/ecom-customers', [App\Http\Controllers\DavuradminController::class,'ecom_customers']);
Route::get('/ecom-invoice', [App\Http\Controllers\DavuradminController::class,'ecom_invoice']);
Route::get('/ecom-product-detail', [App\Http\Controllers\DavuradminController::class,'ecom_product_detail']);
Route::get('/ecom-product-grid', [App\Http\Controllers\DavuradminController::class,'ecom_product_grid']);
Route::get('/ecom-product-list', [App\Http\Controllers\DavuradminController::class,'ecom_product_list']);
Route::get('/ecom-product-order', [App\Http\Controllers\DavuradminController::class,'ecom_product_order']);
Route::get('/email-compose', [App\Http\Controllers\DavuradminController::class,'email_compose']);
Route::get('/email-inbox', [App\Http\Controllers\DavuradminController::class,'email_inbox']);
Route::get('/email-read', [App\Http\Controllers\DavuradminController::class,'email_read']);
Route::get('/form-editor-summernote', [App\Http\Controllers\DavuradminController::class,'form_editor_summernote']);
Route::get('/form-element', [App\Http\Controllers\DavuradminController::class,'form_element']);
Route::get('/form-pickers', [App\Http\Controllers\DavuradminController::class,'form_pickers']);
Route::get('/form-validation-jquery', [App\Http\Controllers\DavuradminController::class,'form_validation_jquery']);
Route::get('/form-wizard', [App\Http\Controllers\DavuradminController::class,'form_wizard']);
Route::get('/map-jqvmap', [App\Http\Controllers\DavuradminController::class,'map_jqvmap']);
Route::get('/page-error-400', [App\Http\Controllers\DavuradminController::class,'page_error_400']);
Route::get('/page-error-403', [App\Http\Controllers\DavuradminController::class,'page_error_403']);
Route::get('/page-error-404', [App\Http\Controllers\DavuradminController::class,'page_error_404']);
Route::get('/page-error-500', [App\Http\Controllers\DavuradminController::class,'page_error_500']);
Route::get('/page-error-503', [App\Http\Controllers\DavuradminController::class,'page_error_503']);
Route::get('/page-forgot-password', [App\Http\Controllers\DavuradminController::class,'page_forgot_password']);
Route::get('/page-lock-screen', [App\Http\Controllers\DavuradminController::class,'page_lock_screen']);
Route::get('/page-login', [App\Http\Controllers\DavuradminController::class,'page_login']);
Route::get('/page-register', [App\Http\Controllers\DavuradminController::class,'page_register']);
Route::get('/table-bootstrap-basic', [App\Http\Controllers\DavuradminController::class,'table_bootstrap_basic']);
Route::get('/table-datatable-basic', [App\Http\Controllers\DavuradminController::class,'table_datatable_basic']);
Route::get('/uc-nestable', [App\Http\Controllers\DavuradminController::class,'uc_nestable']);
Route::get('/uc-noui-slider', [App\Http\Controllers\DavuradminController::class,'uc_noui_slider']);
Route::get('/uc-select2', [App\Http\Controllers\DavuradminController::class,'uc_select2']);
Route::get('/uc-sweetalert', [App\Http\Controllers\DavuradminController::class,'uc_sweetalert']);
Route::get('/uc-toastr', [App\Http\Controllers\DavuradminController::class,'uc_toastr']);
Route::get('/ui-accordion', [App\Http\Controllers\DavuradminController::class,'ui_accordion']);
Route::get('/ui-alert', [App\Http\Controllers\DavuradminController::class,'ui_alert']);
Route::get('/ui-badge', [App\Http\Controllers\DavuradminController::class,'ui_badge']);
Route::get('/ui-button', [App\Http\Controllers\DavuradminController::class,'ui_button']);
Route::get('/ui-button-group', [App\Http\Controllers\DavuradminController::class,'ui_button_group']);
Route::get('/ui-card', [App\Http\Controllers\DavuradminController::class,'ui_card']);
Route::get('/ui-carousel', [App\Http\Controllers\DavuradminController::class,'ui_carousel']);
Route::get('/ui-dropdown', [App\Http\Controllers\DavuradminController::class,'ui_dropdown']);
Route::get('/ui-grid', [App\Http\Controllers\DavuradminController::class,'ui_grid']);
Route::get('/ui-list-group', [App\Http\Controllers\DavuradminController::class,'ui_list_group']);
Route::get('/ui-media-object', [App\Http\Controllers\DavuradminController::class,'ui_media_object']);
Route::get('/ui-modal', [App\Http\Controllers\DavuradminController::class,'ui_modal']);
Route::get('/ui-pagination', [App\Http\Controllers\DavuradminController::class,'ui_pagination']);
Route::get('/ui-popover', [App\Http\Controllers\DavuradminController::class,'ui_popover']);
Route::get('/ui-progressbar', [App\Http\Controllers\DavuradminController::class,'ui_progressbar']);
Route::get('/ui-tab', [App\Http\Controllers\DavuradminController::class,'ui_tab']);
Route::get('/ui-typography', [App\Http\Controllers\DavuradminController::class,'ui_typography']);
Route::get('/widget-basic', [App\Http\Controllers\DavuradminController::class,'widget_basic']);