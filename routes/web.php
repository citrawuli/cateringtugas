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

Route::get('/', function () {
    return view('viewUser.mainCatalogue'); 
}); //home KATALOG

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); 

//COBA ROUTE
Route::get('/coba', [App\Http\Controllers\SuperAdminController::class, 'dashboard_1']);

Route::get('/superAdmin', [App\Http\Controllers\SuperAdminController::class, 'dashboard_1'])->name('homeSuperAdmin');
Route::get('/UserTable', [App\Http\Controllers\SuperAdminController::class, 'viewusertable']); //lihat Table User dan Role
Route::get('/UserFormInput', [App\Http\Controllers\SuperAdminController::class, 'viewuserforminput']); //lihat form input user
Route::post('/AddUser', [App\Http\Controllers\SuperAdminController::class, 'storeuser']); // store data user ke DB
Route::get('/AddUserRole', [App\Http\Controllers\SuperAdminController::class, 'viewformaddroleuser']); //lihat form input user role
Route::post('/StoreUserRole', [App\Http\Controllers\SuperAdminController::class, 'storeuserrole']); // store data role user ke DB
Route::get('/EditUser/{id}', [App\Http\Controllers\SuperAdminController::class, 'edituser']); //lihat form edit role user
Route::post('/UpdateUser/{id}', [App\Http\Controllers\SuperAdminController::class, 'updateuser']); //update data form edit user ke DB
Route::get('/CategoryTable', [App\Http\Controllers\SuperAdminController::class, 'viewcategorytable']); //lihat Table Category
Route::get('/ViewFormCategory', [App\Http\Controllers\SuperAdminController::class, 'viewcategoryforminput']); //lihat form input kategori
Route::post('/StoreCategory', [App\Http\Controllers\SuperAdminController::class, 'storecategory']); // store data user ke DB
Route::get('/EditCategory/{id}', [App\Http\Controllers\SuperAdminController::class, 'editcategory']); //lihat form edit kategori
Route::post('/UpdateCategory/{id}', [App\Http\Controllers\SuperAdminController::class, 'updatecategory']); //update data form edit kategori ke DB


Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('homeUser');
Route::get('/adminPemesanan', [App\Http\Controllers\AdminPemesananController::class, 'index'])->name('homeAdminPemesanan');
Route::get('/adminPembayaran', [App\Http\Controllers\AdminPembayaranController::class, 'index'])->name('homeAdminPembayaran');


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