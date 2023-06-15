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

//Route Halaman Home
Route::get('/', [App\Http\Controllers\HomesController::class, 'index']);
Route::resource('home', 'App\Http\Controllers\HomesController');


//Route Halaman Blog
Route::resource('blog', 'App\Http\Controllers\BlogsController');
Route::get('/food&drink', [App\Http\Controllers\BlogsController::class, 'food']);
Route::get('/art', [App\Http\Controllers\BlogsController::class, 'art']);
Route::get('/bazar', [App\Http\Controllers\BlogsController::class, 'bazar']);
Route::get('/beauty&health', [App\Http\Controllers\BlogsController::class, 'beauty']);
Route::get('/clothes', [App\Http\Controllers\BlogsController::class, 'clothes']);
Route::get('/electronic', [App\Http\Controllers\BlogsController::class, 'electronic']);
Route::get('/furniture', [App\Http\Controllers\BlogsController::class, 'furniture']);
Route::get('/webinar', [App\Http\Controllers\BlogsController::class, 'webinar']);
Route::resource('blogUMKM', 'App\Http\Controllers\BlogUMKMsController');
Route::resource('blogAdmin', 'App\Http\Controllers\BlogAdminsController');
Route::get('/blogUMKM', [App\Http\Controllers\BlogUMKMsController::class, 'index'])->name('blogUMKM');

//Route Blog Detail
Route::get('/blog-details/{id}', [App\Http\Controllers\BlogUMKMsController::class, 'show']);
Route::get('/blog-details-admin/{id}', [App\Http\Controllers\BlogAdminsController::class, 'show']);
Route::get('/food/{id}', [App\Http\Controllers\BlogsController::class, 'blogDetail']);
Route::get('/art/{id}', [App\Http\Controllers\BlogsController::class, 'blogDetail']);
Route::get('/Clothes/{id}', [App\Http\Controllers\BlogsController::class, 'blogDetail']);
Route::get('/furniture/{id}', [App\Http\Controllers\BlogsController::class, 'blogDetail']);
Route::get('/electronic/{id}', [App\Http\Controllers\BlogsController::class, 'blogDetail']);
Route::get('/beauty/{id}', [App\Http\Controllers\BlogsController::class, 'blogDetail']);
Route::get('/bazar/{id}', [App\Http\Controllers\BlogsController::class, 'blogDetail']);
Route::get('/webinar/{id}', [App\Http\Controllers\BlogsController::class, 'blogDetail']);

//Route Halaman Store
Route::get('/stores', [App\Http\Controllers\StoresController::class, 'index'])->name('stores');
Route::get('/art-store', [App\Http\Controllers\StoresController::class, 'art']);
Route::get('/beauty-store', [App\Http\Controllers\StoresController::class, 'beauty']);
Route::get('/clothes-store', [App\Http\Controllers\StoresController::class, 'clothes']);
Route::get('/electronic-store', [App\Http\Controllers\StoresController::class, 'electronic']);
Route::get('/furniture-store', [App\Http\Controllers\StoresController::class, 'furniture']);
Route::get('/other', [App\Http\Controllers\StoresController::class, 'other']);

// Route Store Admin
Route::delete('storeAdmin/{storeAdmin}', [App\Http\Controllers\StoreAdminsController::class, 'destroy'])->name('storeAdmin.destroy');
Route::get('/storeAdmin', [App\Http\Controllers\StoreAdminsController::class, 'index'])->name('storeAdmin');
Route::get('/dashboardAdmin', [App\Http\Controllers\AdminsController::class, 'index'])->name('dashboardAdmin');
Route::get('/storeAdmin/food&drink', [App\Http\Controllers\StoreAdminsController::class, 'food']);
Route::get('/storeAdmin/art', [App\Http\Controllers\StoreAdminsController::class, 'art']);
Route::get('/storeAdmin/beauty&health', [App\Http\Controllers\StoreAdminsController::class, 'beauty']);
Route::get('/storeAdmin/clothes', [App\Http\Controllers\StoreAdminsController::class, 'clothes']);
Route::get('/storeAdmin/electronic', [App\Http\Controllers\StoreAdminsController::class, 'electronic']);
Route::get('/storeAdmin/furniture', [App\Http\Controllers\StoreAdminsController::class, 'furniture']);
Route::get('/storeAdmin/other', [App\Http\Controllers\StoreAdminsController::class, 'other']);
Route::get('/blogAdmin', [App\Http\Controllers\BlogAdminsController::class, 'index'])->name('blogAdmin');

// Route store Detail
Route::get('/store-details/{id}', [App\Http\Controllers\StoreAdminsController::class, 'show']);
Route::get('/store-detail', [App\Http\Controllers\StoresController::class, 'storeDetail']);
Route::get('/food-store/{id}', [App\Http\Controllers\StoresController::class, 'storeDetail']);
Route::get('/art-store/{id}', [App\Http\Controllers\StoresController::class, 'storeDetail']);
Route::get('/clothes-store/{id}', [App\Http\Controllers\StoresController::class, 'storeDetail']);
Route::get('/furniture-store/{id}', [App\Http\Controllers\StoresController::class, 'storeDetail']);
Route::get('/electronic-store/{id}', [App\Http\Controllers\StoresController::class, 'storeDetail']);
Route::get('/beauty-store/{id}', [App\Http\Controllers\StoresController::class, 'storeDetail']);
Route::get('/other-store/{id}', [App\Http\Controllers\StoresController::class, 'storeDetail']);

// Route MyStore
Route::resource('dashboard', 'App\Http\Controllers\DashboardUMKMsController');
Route::get('/myStore', [App\Http\Controllers\MyStoresController::class, 'index'])->name('myStore');
Route::get('/myStore/create', [App\Http\Controllers\MyStoresController::class, 'create']);
Route::post('/myStore/store', [App\Http\Controllers\MyStoresController::class, 'store'])->name('myStore.store');

// Route product
Route::resource('product', 'App\Http\Controllers\ProductsController');
Route::get('/product', [App\Http\Controllers\ProductsController::class, 'index'])->name('product');

//Route Halaman About Us
Route::get('/aboutus', function () {
    return view('aboutus');
});

// Route Auth
Auth::routes();
Route::group(['middleware'=>['admin']],function(){
    Route::resource('admin', 'App\Http\Controllers\AdminsController');
    Route::get('logout', [App\Http\Controllers\AdminsController::class, 'logout']);
});

// Route register login
Route::get('admin/login', [App\Http\Controllers\AdminsController::class, 'login']);
Route::post('admin/login', [App\Http\Controllers\AdminsController::class, 'login']);
Route::get('store/register', [App\Http\Controllers\AuthsController::class, 'login']);
Route::post('store/register', [App\Http\Controllers\AuthsController::class, 'register']);

// Route Search
Route::get('/search', [App\Http\Controllers\HomesController::class, 'search'])->name('product.search');