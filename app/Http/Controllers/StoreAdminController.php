<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Models\User;
use App\Models\Vendor;
use App\Models\Admin;
use Illuminate\Http\Request;

class StoreAdminController extends Controller
{
    public function index()
    {
        $data = Dashboard::all();
        return view('admins.store.store', compact('data'));
    }
    //Memanggil halaman blog kategori food&drink
    public function food()
    {
        $data = Dashboard::where('category', 'Food&Drink')->get();
        return view('admins.store.food', compact('data'));
    }

    //Memanggil halaman blog kategori art
    public function art()
    {
        $data = Dashboard::where('category', 'Art')->get();
        return view('admins.store.art', compact('data'));
    }

    //Memanggil halaman blog kategori beauty&health
    public function beauty()
    {
        $data = Dashboard::where('category', 'Beauty&Health')->get();
        return view('admins.store.beauty&health', compact('data'));
    }

    //Memanggil halaman blog kategori clothes
    public function clothes()
    {
        $data = Dashboard::where('category', 'Clothes')->get();
        return view('admins.store.clothes', compact('data'));
    }

    //Memanggil halaman blog kategori electronic
    public function electronic()
    {
        $data = Dashboard::where('category', 'Electronic')->get();
        return view('admins.store.electronic', compact('data'));
    }

    //Memanggil halaman blog kategori furniture
    public function furniture()
    {
        $data = Dashboard::where('category', 'Furniture')->get();
        return view('admins.store.furniture', compact('data'));
    }

    //Memanggil halaman blog kategori webinar
    public function other()
    {
        $data = Dashboard::where('category', 'Other')->get();
        return view('admins.store.other', compact('data'));
    }
}
