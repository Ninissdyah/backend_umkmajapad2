<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Blogs;
use App\Models\Dashboard;
use App\Models\Product;
use Illuminate\Http\Request;
use Image;
use Auth;
use Illuminate\Support\Facades\File;



class DashboardUMKMController extends Controller
{
    public function index()
    {
        $id = auth()->guard('admin')->user()->vendorId;
        $dashboard = Dashboard::where('vendorId', $id)->get();
        $jumlahProduk = Product::where('vendorId', $id)->count();
        $jumlahBlog = Blogs::where('vendorId', $id)->count();
        return view('pemilikUMKM.dashboard', compact('dashboard', 'jumlahProduk', 'jumlahBlog'));
    }
}
