<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $blogs = Blogs::orderBy('created_at', 'desc')->take(3)->get();
        // return view('home', compact('blogs'), ['blogs' => $blogs]);
        $data = array(
            'id' => "blogs",
            'menu' => 'Gallery',
            'galleries' => Blogs::where('imagePath', '!=',
           '')->whereNotNull('imagePath')->orderBy('created_at',
           'desc')->paginate(3)
        );
        return view('home')->with($data);
    }
}
