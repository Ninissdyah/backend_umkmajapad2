<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\BlogAdminController;
use App\Http\Controllers\Api\BlogUMKMController;
use App\Http\Controllers\Api\MyStoreController;
use App\Http\Controllers\Api\UMKMController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::get('product', [ProductController::class, 'index']);
Route::get('blogAdmin', [BlogAdminController::class, 'index']);
Route::get('blog-details/{id}', [BlogAdminController::class, 'show']);

Route::post('umkm/create', [UMKMController::class, 'createBlog']);
Route::delete('blogAdmin/delete/{id}', [BlogAdminController::class, 'destroy']);

Route::get('blogUMKM', [BlogUMKMController::class, 'index']);
Route::post('api-blogUMKM/create', [BlogUMKMController::class, 'store']);
// Route::delete('blogAdmin/delete/{id}', [BlogAdminController::class, 'destroy']);

Route::post('mystore/create', [MyStoreController::class, 'store']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('blogAdmin/create', [BlogAdminController::class, 'store']);

});
