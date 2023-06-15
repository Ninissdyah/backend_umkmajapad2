<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;

class SideBarsController extends Controller
{
    public function index()
    {
        $id = auth()->guard('admin')->user()->vendorId;
        $dashboard = Dashboard::where('vendorId', $id)->first();
        return view('layoutsUMKM.sidebar', compact('dashboard'));
    }
}
