<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\Dashboard;
use App\Models\Product;
use App\Models\User;
use App\Models\Vendor;
use Illuminate\Support\Facades\DB;

class StoreAdminsController extends Controller
{
    public function index()
    {
        $data = Dashboard::join('users', 'dashboards.vendorId', '=', 'users.vendorId')
        ->get(['dashboards.vendorId', 'dashboards.storeName', 'dashboards.category', 'dashboards.id', 'users.last_login_at']);
        return view('admins.store.store', compact('data'));
    }

    //Memanggil halaman blog kategori food&drink
    public function food()
    {
        $data = Dashboard::join('users', 'dashboards.vendorId', '=', 'users.vendorId')
        ->where('category', 'Food&Drink')
        ->get(['dashboards.vendorId', 'dashboards.storeName', 'dashboards.category', 'dashboards.id', 'users.last_login_at']);
        return view('admins.store.food', compact('data'));
    }

    //Memanggil halaman blog kategori art
    public function art()
    {
        $data = Dashboard::join('users', 'dashboards.vendorId', '=', 'users.vendorId')
        ->where('category', 'Art')
        ->get(['dashboards.vendorId', 'dashboards.storeName', 'dashboards.category', 'dashboards.id', 'users.last_login_at']);
        return view('admins.store.art', compact('data'));
    }

    //Memanggil halaman blog kategori beauty&health
    public function beauty()
    {
        $data = Dashboard::join('users', 'dashboards.vendorId', '=', 'users.vendorId')
        ->where('category', 'Beauty&Health')
        ->get(['dashboards.vendorId', 'dashboards.storeName', 'dashboards.category', 'dashboards.id', 'users.last_login_at']);
        return view('admins.store.beauty&health', compact('data'));
    }

    //Memanggil halaman blog kategori clothes
    public function clothes()
    {
        $data = Dashboard::join('users', 'dashboards.vendorId', '=', 'users.vendorId')
        ->where('category', 'Clothes')
        ->get(['dashboards.vendorId', 'dashboards.storeName', 'dashboards.category', 'dashboards.id', 'users.last_login_at']);
        return view('admins.store.clothes', compact('data'));
    }

    //Memanggil halaman blog kategori electronic
    public function electronic()
    {
        $data = Dashboard::join('users', 'dashboards.vendorId', '=', 'users.vendorId')
        ->where('category', 'Electronic')
        ->get(['dashboards.vendorId', 'dashboards.storeName', 'dashboards.category', 'dashboards.id', 'users.last_login_at']);
        return view('admins.store.electronic', compact('data'));
    }

    //Memanggil halaman blog kategori furniture
    public function furniture()
    {
        $data = Dashboard::join('users', 'dashboards.vendorId', '=', 'users.vendorId')
        ->where('category', 'Furniture')
        ->get(['dashboards.vendorId', 'dashboards.storeName', 'dashboards.category', 'dashboards.id', 'users.last_login_at']);
        return view('admins.store.furniture', compact('data'));
    }

    //Memanggil halaman blog kategori webinar
    public function other()
    {
         $data = Dashboard::join('users', 'dashboards.vendorId', '=', 'users.vendorId')
        ->where('category', 'Other')
        ->get(['dashboards.vendorId', 'dashboards.storeName', 'dashboards.category', 'dashboards.id', 'users.last_login_at']);
        return view('admins.store.other', compact('data'));
    }

    public function destroy($id)
    {
        $account= User::where('vendorId', $id)->delete();
        $product = Product::where('vendorId', $id)->delete();
        $store = Dashboard::where('vendorId', $id)->delete();
        $blogs = Blogs::where('vendorId', $id)->delete();
        $vendor = Vendor::where('id', $id)->delete();
        return redirect('/storeAdmin');
    }
}
