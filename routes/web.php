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
Route::get('/', [App\Http\Controllers\Api\HomeController::class, 'index']);
Route::resource('home', 'App\Http\Controllers\Api\HomeController');


//Route Halaman Blog
Route::resource('blog', 'App\Http\Controllers\Api\BlogController');
Route::get('/food&drink', [App\Http\Controllers\Api\BlogController::class, 'food']);
Route::get('/art', [App\Http\Controllers\Api\BlogController::class, 'art']);
Route::get('/bazar', [App\Http\Controllers\Api\BlogController::class, 'bazar']);
Route::get('/beauty&health', [App\Http\Controllers\Api\BlogController::class, 'beauty']);
Route::get('/clothes', [App\Http\Controllers\Api\BlogController::class, 'clothes']);
Route::get('/electronic', [App\Http\Controllers\Api\BlogController::class, 'electronic']);
Route::get('/furniture', [App\Http\Controllers\Api\BlogController::class, 'furniture']);
Route::get('/webinar', [App\Http\Controllers\Api\BlogController::class, 'webinar']);


//Route Halaman Blog Detail
Route::get('/blog-details/{id}', [App\Http\Controllers\Api\BlogUMKMController::class, 'show']);
Route::get('/blog-details-admin/{id}', [App\Http\Controllers\Api\BlogAdminController::class, 'show']);
Route::resource('product', 'App\Http\Controllers\Api\ProductController');
Route::resource('blogUMKM', 'App\Http\Controllers\Api\BlogUMKMController');
Route::resource('blogAdmin', 'App\Http\Controllers\Api\BlogAdminController');


//Route Halaman Store
Route::get('/stores', [App\Http\Controllers\Api\StoreController::class, 'index'])->name('stores');

Route::get('/art-store', [App\Http\Controllers\Api\StoreController::class, 'art']);
Route::get('/beauty-store', [App\Http\Controllers\Api\StoreController::class, 'beauty']);
Route::get('/clothes-store', [App\Http\Controllers\Api\StoreController::class, 'clothes']);
Route::get('/electronic-store', [App\Http\Controllers\Api\StoreController::class, 'electronic']);
Route::get('/furniture-store', [App\Http\Controllers\Api\StoreController::class, 'furniture']);
Route::get('/other', [App\Http\Controllers\Api\StoreController::class, 'other']);

//Route Halaman Store Detail (Sementara)
Route::get('/store-detail', [App\Http\Controllers\Api\StoreController::class, 'storeDetail']);
Route::get('/food/{id}', [App\Http\Controllers\Api\BlogController::class, 'blogDetail']);
Route::get('/art/{id}', [App\Http\Controllers\Api\BlogController::class, 'blogDetail']);
Route::get('/Clothes/{id}', [App\Http\Controllers\Api\BlogController::class, 'blogDetail']);
Route::get('/furniture/{id}', [App\Http\Controllers\Api\BlogController::class, 'blogDetail']);
Route::get('/electronic/{id}', [App\Http\Controllers\Api\BlogController::class, 'blogDetail']);
Route::get('/beauty/{id}', [App\Http\Controllers\Api\BlogController::class, 'blogDetail']);
Route::get('/bazar/{id}', [App\Http\Controllers\Api\BlogController::class, 'blogDetail']);
Route::get('/webinar/{id}', [App\Http\Controllers\Api\BlogController::class, 'blogDetail']);

Route::resource('dashboard', 'App\Http\Controllers\Api\DashboardUMKMController');

//Route Halaman About Us
Route::get('/aboutus', function () {
    return view('aboutus');
});

// Route Auth
Auth::routes();
Route::group(['middleware'=>['admin']],function(){
    Route::resource('admin', 'App\Http\Controllers\Api\AdminController');
    Route::get('logout', [App\Http\Controllers\Api\AdminController::class, 'logout']);
});

Route::get('admin/login', [App\Http\Controllers\Api\AdminController::class, 'login']);
Route::post('admin/login', [App\Http\Controllers\Api\AdminController::class, 'login']);
Route::get('store/register', [App\Http\Controllers\Api\AuthController::class, 'login']);
Route::post('store/register', [App\Http\Controllers\Api\AuthController::class, 'register']);
Route::post('/reset', [App\Http\Controllers\Api\VendorController::class, 'reset']);

Route::get('/dashboardUMKM', [App\Http\Controllers\Api\DashboardUMKMController::class, 'index'])->name('dashboardUMKM');
Route::get('/myStore', [App\Http\Controllers\Api\MyStoreController::class, 'index'])->name('myStore');
Route::get('/product', [App\Http\Controllers\Api\ProductController::class, 'index'])->name('product');
Route::get('/blogUMKM', [App\Http\Controllers\Api\BlogUMKMController::class, 'index'])->name('blogUMKM');

Route::get('/myStore/create', [App\Http\Controllers\Api\MyStoreController::class, 'create']);
Route::post('/myStore/store', [App\Http\Controllers\Api\MyStoreController::class, 'store'])->name('myStore.store');

Route::get('/storeAdmin', [App\Http\Controllers\Api\StoreAdminController::class, 'index'])->name('storeAdmin');
Route::get('/dashboardAdmin', [App\Http\Controllers\Api\AdminController::class, 'index'])->name('dashboardAdmin');
Route::get('/storeAdmin/food&drink', [App\Http\Controllers\Api\StoreAdminController::class, 'food']);
Route::get('/storeAdmin/art', [App\Http\Controllers\Api\StoreAdminController::class, 'art']);
Route::get('/storeAdmin/beauty&health', [App\Http\Controllers\Api\StoreAdminController::class, 'beauty']);
Route::get('/storeAdmin/clothes', [App\Http\Controllers\Api\StoreAdminController::class, 'clothes']);
Route::get('/storeAdmin/electronic', [App\Http\Controllers\Api\StoreAdminController::class, 'electronic']);
Route::get('/storeAdmin/furniture', [App\Http\Controllers\Api\StoreAdminController::class, 'furniture']);
Route::get('/storeAdmin/other', [App\Http\Controllers\Api\StoreAdminController::class, 'other']);
Route::get('/blogAdmin', [App\Http\Controllers\Api\BlogAdminController::class, 'index'])->name('blogAdmin');

Route::get('/food-store/{id}', [App\Http\Controllers\Api\StoreController::class, 'storeDetail']);
Route::get('/art-store/{id}', [App\Http\Controllers\Api\StoreController::class, 'storeDetail']);
Route::get('/clothes-store/{id}', [App\Http\Controllers\Api\StoreController::class, 'storeDetail']);
Route::get('/furniture-store/{id}', [App\Http\Controllers\Api\StoreController::class, 'storeDetail']);
Route::get('/electronic-store/{id}', [App\Http\Controllers\Api\StoreController::class, 'storeDetail']);
Route::get('/beauty-store/{id}', [App\Http\Controllers\Api\StoreController::class, 'storeDetail']);
Route::get('/other-store/{id}', [App\Http\Controllers\Api\StoreController::class, 'storeDetail']);

Route::get('/send', [App\Http\Controllers\Api\HomeController::class, 'send'])->name('send.message');

//Route Halaman Blog Detail
Route::get('/store-details/{id}', [App\Http\Controllers\Api\StoreAdminController::class, 'show']);