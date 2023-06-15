<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Dashboard;

class CategoryController extends Controller
{
    public function index()
    {
        $dashboard = Dashboard::where('category', 'Art')->paginate(12);
        return view('stores.store-art', compact('dashboard'));
    }

    public function food()
    {
        $dashboard = Dashboard::where('category', 'Food And Drink')->paginate(12);
        return view('category.food and drink', compact('dashboard'));
    }

    // public function clothes()
    // {
    //     $dashboard = Dashboard::where('category', 'Clothes')->paginate(12);
    //     return view('stores.store-clothes', compact('dashboard'));
    // }

    public function furniture()
    {
        $dashboard = Dashboard::where('category', 'Furniture')->paginate(12);
        return view('category.furniture', compact('dashboard'));
    }

    public function electronic()
    {
        $dashboard = Dashboard::where('category', 'Electronic')->paginate(12);
        return view('category.electronic', compact('dashboard'));
    }

    public function beauty()
    {
        $dashboard = Dashboard::where('category', 'Beauty And Health')->paginate(12);
        return view('category.beauty', compact('dashboard'));
    }

    public function showStore($id)
    {
        $data = array(
            'id' => "dashboard",
            'dashboard' => Dashboard::find($id)
        );
        return view('stores.store-detail')->with($data);
    }
}
