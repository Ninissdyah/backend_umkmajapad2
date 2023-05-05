<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dashboard;
use App\Models\Product;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //Memanggil halaman store category food&drink
    public function index()
    {
        $dashboard = Dashboard::where('category', 'Food&Drink')->paginate(9);
        return view('stores.store-food', compact('dashboard'));

    }
    
    //Memanggil halaman store category art
    public function art()
    {
        $dashboard = Dashboard::where('category', 'Art')->paginate(9);
        return view('stores.store-art', compact('dashboard'));
    }

    //Memanggil halaman store category beauty&health
    public function beauty()
    {
        $dashboard = Dashboard::where('category', 'Beauty&Health')->paginate(9);
        return view('stores.store-beauty&health', compact('dashboard'));
    }

    //Memanggil halaman store category clothes
    public function clothes()
    {
        $dashboard = Dashboard::where('category', 'Clothes')->paginate(9);
        return view('stores.store-clothes', compact('dashboard'));
    }

    //Memanggil halaman store category electronic
    public function electronic()
    {
        $dashboard = Dashboard::where('category', 'Electronic')->paginate(9);
        return view('stores.store-electronic', compact('dashboard'));
    }

    //Memanggil halaman store category furniture
    public function furniture()
    {
        $dashboard = Dashboard::where('category', 'Furniture')->paginate(9);
        return view('stores.store-furniture', compact('dashboard'));
    }

    //Memanggil halaman store category others
    public function other()
    {
        $dashboard = Dashboard::where('category', 'Other')->paginate(9);
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
