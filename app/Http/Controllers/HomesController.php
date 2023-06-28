<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Blogs;
use App\Models\Dashboard;
use App\Models\Mail;
use App\Models\Mails;
use App\Models\Product;
use Illuminate\Http\Request;

class HomesController extends Controller
{
    public function index(){
        $blogs = Blogs::where('imagePath', '!=','')->whereNotNull('imagePath')->orderBy('created_at',
        'desc')->paginate(4);
        $store = Dashboard::where('imagePath', '!=','')->whereNotNull('imagePath')->orderBy('created_at',
        'desc')->paginate(4);
        return view('home', compact('blogs', 'store'));
    }

    public function search(Request $request)
    {
        $cari = $request->kata;
        $blogs = Blogs::where('contentTitle','like',"%".$cari."%")
                 ->orwhere('category','like',"%".$cari."%")
                 ->orwhere('content','like',"%".$cari."%")->paginate(6);
        $store = Dashboard::where('storeName','like',"%".$cari."%")
                 ->orwhere('category','like',"%".$cari."%")->paginate(6);
        $product = Product::where('productName','like',"%".$cari."%")
                    ->orwhere('description','like',"%".$cari."%")->paginate(6);
        return view('search', compact('store', 'cari', 'blogs', 'product'));
    }
    
}
