<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Product;

class ProductController extends Controller
{
    public function AddProduct()
    {
        return view('admin.product');
    }

    public function store(Request $request)
    {
        $products = new Product;
        $products->product_name=$request->product_name;
        $products->visit_link=$request->visit_link;
        $products->overview=$request->overview;
        $products->description=$request->description;
        $products->hashtags=$request->hashtags;
        if($request->image)
        {
            $file=$request->file('image');
            $extenton = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenton;
            $file->move('upload/products', $filename);
            $products->image=$filename;
        }
        $products->save();

        return view('admin.products');

    }

    public function show()
    {
        $products = Product::all();
        return view('admin.productlist', compact('products'));
    }

    // update 
    public function editproduct($id)
    {
        $product=Product::find($id);

        return view('admin.productupdate', compact('product'));
    }


    public function updateproduct(Request $request, $id)
    {
        $product=Product::find($id);
        $product->product_name=$request->product_name;
        $product->visit_link=$request->visit_link;
        $product->overview=$request->overview;
        $product->description=$request->description;
        $product->hashtags=$request->hashtags;
        if($request->image)
        {
            $destination = 'upload/products'.$product->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file=$request->file('image');
            $extenton = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenton;
            $file->move('upload/products', $filename);
            $product->image=$filename;
        }
        $product->update();

        return view('admin.productlist', compact('product'));

    }

    public function deleteprod($id)
    {
        $product = Product::find($id);
        $destination = 'upload/products/'.$product->image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $product->delete();
        return view('admin.productlist');
    }
}
