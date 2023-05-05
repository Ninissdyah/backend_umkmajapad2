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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', function () {
    return view('home');
});


//Route Halaman Blog
Route::resource('blog', 'App\Http\Controllers\BlogController');

Route::get('/art', [App\Http\Controllers\BlogController::class, 'art']);
Route::get('/bazar', [App\Http\Controllers\BlogController::class, 'bazar']);
Route::get('/beauty', [App\Http\Controllers\BlogController::class, 'beauty']);
Route::get('/clothes', [App\Http\Controllers\BlogController::class, 'clothes']);
Route::get('/electronic', [App\Http\Controllers\BlogController::class, 'electronic']);
Route::get('/furniture', [App\Http\Controllers\BlogController::class, 'furniture']);
Route::get('/webinar', [App\Http\Controllers\BlogController::class, 'webinar']);

Route::get('/blog-details/{id}', [App\Http\Controllers\BlogUMKMController::class, 'show']);

Route::resource('product', 'App\Http\Controllers\ProductController');
Route::resource('blogUMKM', 'App\Http\Controllers\BlogUMKMController');
Route::resource('blogAdmin', 'App\Http\Controllers\BlogAdminController');
//Route Halaman Blog Detail (Sementara)
Route::get('/blog-detail', [App\Http\Controllers\BlogController::class, 'blogDetail']);


//Route Halaman Store
Route::resource('store', 'App\Http\Controllers\StoreController');

Route::get('/art-store', [App\Http\Controllers\StoreController::class, 'art']);
Route::get('/beauty-store', [App\Http\Controllers\StoreController::class, 'beauty']);
Route::get('/clothes-store', [App\Http\Controllers\StoreController::class, 'clothes']);
Route::get('/electronic-store', [App\Http\Controllers\StoreController::class, 'electronic']);
Route::get('/furniture-store', [App\Http\Controllers\StoreController::class, 'furniture']);
Route::get('/other', [App\Http\Controllers\StoreController::class, 'other']);

//Route Halaman Store Detail (Sementara)
Route::get('/store-detail', [App\Http\Controllers\StoreController::class, 'storeDetail']);

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
// Route::get('/product/create', [App\Http\Controllers\ProductController::class, 'create']);
// Route::post('/product/store', [App\Http\Controllers\ProductController::class, 'store'])->name('product.store');
// Route::post('/product/destroy', [App\Http\Controllers\ProductController::class, 'store'])->name('product.destroy');
// Route::get('/blogUMKM/create', [App\Http\Controllers\BlogUMKMController::class, 'create']);
// Route::post('/blogUMKM/store', [App\Http\Controllers\BlogUMKMController::class, 'store'])->name('blogUMKM.store');

Route::get('/dashboardAdmin', [App\Http\Controllers\AdminController::class, 'index'])->name('dashboardAdmin');
Route::get('/storeAdmin', [App\Http\Controllers\StoreAdminController::class, 'index'])->name('storeAdmin');
Route::get('/blogAdmin', [App\Http\Controllers\BlogAdminController::class, 'index'])->name('blogAdmin');

Route::get('/food-store/{id}', [App\Http\Controllers\StoreController::class, 'storeDetail']);
Route::get('/art-store/{id}', [App\Http\Controllers\StoreController::class, 'storeDetail']);
Route::get('/clothes-store/{id}', [App\Http\Controllers\StoreController::class, 'storeDetail']);
Route::get('/furniture-store/{id}', [App\Http\Controllers\StoreController::class, 'storeDetail']);
Route::get('/electronic-store/{id}', [App\Http\Controllers\StoreController::class, 'storeDetail']);
Route::get('/beauty-store/{id}', [App\Http\Controllers\StoreController::class, 'storeDetail']);
Route::get('/other-store/{id}', [App\Http\Controllers\StoreController::class, 'storeDetail']);

Route::get('/food/{id}', [App\Http\Controllers\BlogController::class, 'blogDetail']);
Route::get('/art/{id}', [App\Http\Controllers\BlogController::class, 'blogDetail']);
Route::get('/clothes/{id}', [App\Http\Controllers\BlogController::class, 'blogDetail']);
Route::get('/furniture/{id}', [App\Http\Controllers\BlogController::class, 'blogDetail']);
Route::get('/electronic/{id}', [App\Http\Controllers\BlogController::class, 'blogDetail']);
Route::get('/beauty/{id}', [App\Http\Controllers\BlogController::class, 'blogDetail']);
Route::get('/bazar/{id}', [App\Http\Controllers\BlogController::class, 'blogDetail']);
Route::get('/webinar/{id}', [App\Http\Controllers\BlogController::class, 'blogDetail']);