<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //Memanggil halaman blog kategori food&drink
    public function index()
    {
        $blogs = Blogs::where('category', 'Food&Drink')->paginate(9);
        return view('blogs.blog-food', compact('blogs'));
    }

    public function food()
    {
        $blogs = Blogs::where('category', 'Food&Drink')->paginate(9);
        return view('blogs.blog-food2', compact('blogs'));
    }

    //Memanggil halaman blog kategori art
    public function art()
    {
        $blogs = Blogs::where('category', 'Art')->paginate(9);
        return view('blogs.blog-art', compact('blogs'));
    }

    //Memanggil halaman blog kategori bazar
    public function bazar()
    {
        $blogs = Blogs::where('category', 'Bazar')->paginate(9);
        return view('blogs.blog-bazar', compact('blogs'));
    }

    //Memanggil halaman blog kategori beauty&health
    public function beauty()
    {
        $blogs = Blogs::where('category', 'Beauty&Health')->paginate(9);
        return view('blogs.blog-beauty', compact('blogs'));
    }

    //Memanggil halaman blog kategori clothes
    public function clothes()
    {
        $blogs = Blogs::where('category', 'Clothes')->paginate(9);
        return view('blogs.blog-clothes', compact('blogs'));
    }

    //Memanggil halaman blog kategori electronic
    public function electronic()
    {
        $blogs = Blogs::where('category', 'Electronic')->paginate(9);
        return view('blogs.blog-electronic', compact('blogs'));
    }

    //Memanggil halaman blog kategori furniture
    public function furniture()
    {
        $blogs = Blogs::where('category', 'Furniture')->paginate(9);
        return view('blogs.blog-furniture', compact('blogs'));
    }

    //Memanggil halaman blog kategori webinar
    public function webinar()
    {
        $blogs = Blogs::where('category', 'Webinar')->paginate(9);
        return view('blogs.blog-webinar', compact('blogs'));
    }

    //Memanggil halaman detail blog (sementara)
    public function blogDetail($id)
    {
        $data = array(
            'id' => "blogs",
            'blogs' => Blogs::find($id)
        );
        return view('blogs.blog-details.blog-detail')->with($data);
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
