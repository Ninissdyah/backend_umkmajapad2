<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dashboard;

class SideBarController extends Controller
{
    public function index()
    {
        $id = auth()->guard('admin')->user()->vendorId;
        $dashboard = Dashboard::where('vendorId', $id)->first();
        return view('layoutsUMKM.sidebar', compact('dashboard'));
    }
}
