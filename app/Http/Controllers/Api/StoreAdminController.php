<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Dashboard;

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

    public function show($id)
    {
        $data = array(
            'id' => "dashboards",
            'dashboards' => Dashboard::find($id)
        );
        if (is_null($data)){
            return response()->json("Not Found", 404);
        } else{
            return response()->json($data, 200);
        }
    }
}
