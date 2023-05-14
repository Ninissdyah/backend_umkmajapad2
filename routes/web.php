<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

//Route Halaman Home
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::resource('home', 'App\Http\Controllers\HomeController');


//Route Halaman Blog
Route::resource('blog', 'App\Http\Controllers\BlogController');
Route::get('/food&drink', [App\Http\Controllers\BlogController::class, 'food']);
Route::get('/art', [App\Http\Controllers\BlogController::class, 'art']);
Route::get('/bazar', [App\Http\Controllers\BlogController::class, 'bazar']);
Route::get('/beauty', [App\Http\Controllers\BlogController::class, 'beauty']);
Route::get('/clothes', [App\Http\Controllers\BlogController::class, 'clothes']);
Route::get('/electronic', [App\Http\Controllers\BlogController::class, 'electronic']);
Route::get('/furniture', [App\Http\Controllers\BlogController::class, 'furniture']);
Route::get('/webinar', [App\Http\Controllers\BlogController::class, 'webinar']);


//Route Halaman Blog Detail
Route::get('/blog-details/{id}', [App\Http\Controllers\BlogUMKMController::class, 'show']);

Route::resource('product', 'App\Http\Controllers\ProductController');
Route::resource('blogUMKM', 'App\Http\Controllers\BlogUMKMController');
Route::resource('blogAdmin', 'App\Http\Controllers\BlogAdminController');


//Route Halaman Store
Route::get('/stores', [App\Http\Controllers\StoreController::class, 'index'])->name('stores');

Route::get('/art-store', [App\Http\Controllers\StoreController::class, 'art']);
Route::get('/beauty-store', [App\Http\Controllers\StoreController::class, 'beauty']);
Route::get('/clothes-store', [App\Http\Controllers\StoreController::class, 'clothes']);
Route::get('/electronic-store', [App\Http\Controllers\StoreController::class, 'electronic']);
Route::get('/furniture-store', [App\Http\Controllers\StoreController::class, 'furniture']);
Route::get('/other', [App\Http\Controllers\StoreController::class, 'other']);

//Route Halaman Store Detail (Sementara)
Route::get('/store-detail', [App\Http\Controllers\StoreController::class, 'storeDetail']);
Route::get('/food/{id}', [App\Http\Controllers\BlogController::class, 'blogDetail']);
Route::get('/art/{id}', [App\Http\Controllers\BlogController::class, 'blogDetail']);
Route::get('/Clothes/{id}', [App\Http\Controllers\BlogController::class, 'blogDetail']);
Route::get('/furniture/{id}', [App\Http\Controllers\BlogController::class, 'blogDetail']);
Route::get('/electronic/{id}', [App\Http\Controllers\BlogController::class, 'blogDetail']);
Route::get('/beauty/{id}', [App\Http\Controllers\BlogController::class, 'blogDetail']);
Route::get('/bazar/{id}', [App\Http\Controllers\BlogController::class, 'blogDetail']);
Route::get('/webinar/{id}', [App\Http\Controllers\BlogController::class, 'blogDetail']);

Route::resource('dashboard', 'App\Http\Controllers\DashboardUMKMController');

//Route Halaman About Us
Route::get('/aboutus', function () {
    return view('aboutus');
});

// Route Auth
Auth::routes();
Route::group(['middleware'=>['admin']],function(){
    Route::resource('admin', 'App\Http\Controllers\AdminController');
    Route::get('logout', [App\Http\Controllers\AdminController::class, 'logout']);
});

Route::get('admin/login', [App\Http\Controllers\AdminController::class, 'login']);
Route::post('admin/login', [App\Http\Controllers\AdminController::class, 'login']);
Route::get('store/register', [App\Http\Controllers\VendorController::class, 'loginRegister']);
Route::post('store/register', [App\Http\Controllers\VendorController::class, 'vendorRegister']);
Route::post('/reset', [App\Http\Controllers\VendorController::class, 'reset']);

Route::get('/dashboardUMKM', [App\Http\Controllers\DashboardUMKMController::class, 'index'])->name('dashboardUMKM');
Route::get('/myStore', [App\Http\Controllers\MyStoreController::class, 'index'])->name('myStore');
Route::get('/product', [App\Http\Controllers\ProductController::class, 'index'])->name('product');
Route::get('/blogUMKM', [App\Http\Controllers\BlogUMKMController::class, 'index'])->name('blogUMKM');

Route::get('/myStore/create', [App\Http\Controllers\MyStoreController::class, 'create']);
Route::post('/myStore/store', [App\Http\Controllers\MyStoreController::class, 'store'])->name('myStore.store');

Route::get('/storeAdmin', [App\Http\Controllers\StoreAdminController::class, 'index'])->name('storeAdmin');
Route::get('/dashboardAdmin', [App\Http\Controllers\AdminController::class, 'index'])->name('dashboardAdmin');
Route::get('/storeAdmin/food&drink', [App\Http\Controllers\StoreAdminController::class, 'food']);
Route::get('/storeAdmin/art', [App\Http\Controllers\StoreAdminController::class, 'art']);
Route::get('/storeAdmin/beauty&health', [App\Http\Controllers\StoreAdminController::class, 'beauty']);
Route::get('/storeAdmin/clothes', [App\Http\Controllers\StoreAdminController::class, 'clothes']);
Route::get('/storeAdmin/electronic', [App\Http\Controllers\StoreAdminController::class, 'electronic']);
Route::get('/storeAdmin/furniture', [App\Http\Controllers\StoreAdminController::class, 'furniture']);
Route::get('/storeAdmin/other', [App\Http\Controllers\StoreAdminController::class, 'other']);
Route::get('/blogAdmin', [App\Http\Controllers\BlogAdminController::class, 'index'])->name('blogAdmin');

Route::get('/food-store/{id}', [App\Http\Controllers\StoreController::class, 'storeDetail']);
Route::get('/art-store/{id}', [App\Http\Controllers\StoreController::class, 'storeDetail']);
Route::get('/clothes-store/{id}', [App\Http\Controllers\StoreController::class, 'storeDetail']);
Route::get('/furniture-store/{id}', [App\Http\Controllers\StoreController::class, 'storeDetail']);
Route::get('/electronic-store/{id}', [App\Http\Controllers\StoreController::class, 'storeDetail']);
Route::get('/beauty-store/{id}', [App\Http\Controllers\StoreController::class, 'storeDetail']);
Route::get('/other-store/{id}', [App\Http\Controllers\StoreController::class, 'storeDetail']);

// Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
// Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
// Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
// Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

Route::get('/send', [App\Http\Controllers\HomeController::class, 'send'])->name('send.message');

//Route Halaman Blog Detail
Route::get('/store-details/{id}', [App\Http\Controllers\StoreAdminController::class, 'show']);