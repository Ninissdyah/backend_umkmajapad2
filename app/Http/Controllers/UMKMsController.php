<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;
use Image;
use Auth;

class UMKMsController extends Controller
{
    public function createBlog(Request $request)
    {
        $messages = [
            'contentTitle.required'    => 'Title Content is required!',
            'content.required'    => 'Content article is required!',
            'content.required'    => 'Contact is required!',
            'author.required'    => 'Author is required!',
            'contentTitle.uniqe' => 'The title content already exists!',
            'category.required' => 'Category is required!',
            'imagePath.image'    => 'Files must be in the form of images!',
            'imagePath.required'    => 'Store Image is required!',
            'imagePath.max'     => 'Image file size is too big! The maximum image size is :max!',
            'imagePath.mimes'     => 'Image files must be :mimes!'
        ];
        $this -> validate($request,[
            'imagePath' => 'required|image|mimes:jpeg,png,jpg,gif|max:5000',
            'contentTitle' => 'required|unique:blogs',
            'content' => 'required',
            'author' => 'required',
            'category' => 'required'
        ],$messages);

        $blogs = new Blogs;
        $blogs->vendorId = Auth::guard('admin')->user()->vendorId;
        $blogs->contentTitle = $request->input('contentTitle');
        $blogs->content = $request->input('content');
        $blogs->author = $request->input('author');
        $blogs->category = $request->input('category');
        
        $image = request()->file('imagePath'); 
        if($image) { 
            $filenameFirst = $image->getClientOriginalName();
            $filenameUnik = pathinfo($filenameFirst, PATHINFO_FILENAME);
            $extension = $request->file('imagePath')->getClientOriginalExtension();
            $imageName = $filenameUnik . '_' . time() . '.' . $extension; 
            Image::make($request->file('imagePath'))->resize(500, 700, function ($constraint) {
                $constraint->aspectRatio();
            })->save('storage/blogs/'.$imageName);
            $blogs->imagePath = $imageName;
        } 

        $blogs->save();
        return redirect('/blogUMKM')->with(['success' => 'Content uploaded successfully']);
    }
}
