<?php

namespace App\Http\Controllers;
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
        $idx = auth()->guard('admin')->user()->vendorId;
        $dashboard = Dashboard::where('vendorId', $idx)->get()->toArray();
        $id = $dashboard[0]['id'];
        $dashboardx = Dashboard::find($id)->toArray();
        $vendorId = $dashboardx['vendorId'];
        $product = Product::where('vendorId', $vendorId)->paginate(12);
        $no = 1;
        return view('pemilikUMKM.product', compact('product'), compact('no'));
    }

    public function create()
    {
        $product = Product::all();
        return view('form-input.form-product', ['products' => $product]);
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
        $products->vendorId = Auth::guard('admin')->user()->vendorId;
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
            })->save('storage/product'.'/'.$imageName);
            $products->imagePath = $imageName;
        } 

        $products->save();
        return redirect('/product')->with(['success' => 'Product uploaded successfully!']);
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
        $image = Product::findOrFail($id);
        $destination = 'storage/product/'.$product->imagePath;
        File::delete($destination);
        $product->delete();
        return redirect('/product')->with(['berhasil' => 'Product removed successfully!']);
    }
}
