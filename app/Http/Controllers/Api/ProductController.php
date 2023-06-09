<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Dashboard;
use App\Models\Product;
use Illuminate\Support\Facades\File;
use Image;
use Auth;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $id = Auth::user()->vendorId;
        $product = Product::where('vendorId', $id)->get();
        return response()->json($product, 200);
    }

    public function store(Request $request)
    {
        $messages = [
            'productName.required'    => 'Product Name is required!',
            'imagePath.image'    => 'Files must be in the form of images!',
            'imagePath.required'    => 'Product Image is required!',
            'description.required'    => 'Description is required!',
            'productPrice.required'    => 'Price is required!',
            'productName.max'     => 'The Product Title must contain a maximum of :max characters!',
            'imagePath.max'     => 'Image file size is too big! The maximum image size is :max!',
            'imagePath.mimes'     => 'Image files must be :mimes!'
        ];
        $this -> validate($request,[
            'imagePath' => 'required|image|mimes:jpg,png,jpeg|max:5000',
            'productName' => 'required|unique:products|min:5|max:20',
            'productPrice' => 'required',
            'description' => 'required'
        ],$messages);

        $products = new Product;
        $products->vendorId = Auth::user()->vendorId;
        $products->productName = $request->input('productName');
        $products->productPrice = $request->input('productPrice');
        $products->description = $request->input('description');
        
        $image = request()->file('imagePath'); 
        if($image) { 
            $filenameFirst = $image->getClientOriginalName();
            $filenameUnik = pathinfo($filenameFirst, PATHINFO_FILENAME);
            $extension = $request->file('imagePath')->getClientOriginalExtension();
            $imageName = $filenameUnik . '_' . time() . '.' . $extension; 
            Image::make($request->file('imagePath'))->resize(500, 700, function ($constraint) {
                $constraint->aspectRatio();
            })->save('storage/product/'.$imageName);
            $products->imagePath = $imageName;
        } 

        $products->save();
        if (!$products){
            return response()->json("Error Saving", 500);
        } else{
            return response()->json($products, 201);
        }
    }

    public function show($id)
    {
        $data = array(
            'id' => "products",
            'products' => Product::find($id)
        );
        return view('pemilikUMKM.product')->with($data);
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $destination = 'storage/product/'.$product->imagePath;
        File::delete($destination);
        $product->delete();
        if(!$product){
            return response()->json("Error deleting", 500);
        }else{
            return response()->json("Product removed successfully!", 200);
        }
    }
}
