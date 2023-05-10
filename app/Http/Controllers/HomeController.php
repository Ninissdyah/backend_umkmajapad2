<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\Dashboard;

class HomeController extends Controller
{
    public function index(){
        $blogs = Blogs::where('imagePath', '!=','')->whereNotNull('imagePath')->orderBy('created_at',
        'desc')->paginate(3);
        $store = Dashboard::where('imagePath', '!=','')->whereNotNull('imagePath')->orderBy('created_at',
        'desc')->paginate(4);
        return view('home', compact('blogs', 'store'));
    }
    
}
