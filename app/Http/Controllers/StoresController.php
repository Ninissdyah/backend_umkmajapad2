<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use App\Models\Product;
use App\Models\User;

class StoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //Memanggil halaman store category food&drink
    public function index()
    {
        $dashboard = Dashboard::where('category', 'Food&Drink')->orderBy('storeName', 'asc')->paginate(6);
        $user = User::all();
        return view('stores.store-food', compact('dashboard', 'user'));

    }
    
    //Memanggil halaman store category art
    public function art()
    {
        $dashboard = Dashboard::where('category', 'Art')->orderBy('storeName', 'asc')->paginate(6);
        return view('stores.store-art', compact('dashboard'));
    }

    //Memanggil halaman store category beauty&health
    public function beauty()
    {
        $dashboard = Dashboard::where('category', 'Beauty&Health')->orderBy('storeName', 'asc')->paginate(6);
        return view('stores.store-beauty&health', compact('dashboard'));
    }

    //Memanggil halaman store category clothes
    public function clothes()
    {
        $dashboard = Dashboard::where('category', 'Clothes')->orderBy('storeName', 'asc')->paginate(6);
        return view('stores.store-clothes', compact('dashboard'));
    }

    //Memanggil halaman store category electronic
    public function electronic()
    {
        $dashboard = Dashboard::where('category', 'Electronic')->orderBy('storeName', 'asc')->paginate(6);
        return view('stores.store-electronic', compact('dashboard'));
    }

    //Memanggil halaman store category furniture
    public function furniture()
    {
        $dashboard = Dashboard::where('category', 'Furniture')->orderBy('storeName', 'asc')->paginate(6);
        return view('stores.store-furniture', compact('dashboard'));
    }

    //Memanggil halaman store category others
    public function other()
    {
        $dashboard = Dashboard::where('category', 'Other')->orderBy('storeName', 'asc')->paginate(6);
        return view('stores.store-other', compact('dashboard'));
    }


    //Memanggil halaman detail store (sementara)
    public function storeDetail($id)
    {
        $data = array(
            'id' => "dashboards",
            'dashboards' => Dashboard::find($id)
        );
        $dashboard = Dashboard::find($id)->toArray();
        $vendorId = $dashboard['vendorId'];
        $product = Product::where('vendorId', $vendorId)->paginate(8);
        return view('stores.store-details.store-detail', compact('product'))->with($data);
    }
}
