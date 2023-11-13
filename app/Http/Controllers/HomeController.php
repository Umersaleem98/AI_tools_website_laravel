<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function redirect()
    {
        $usertype=Auth::user()->usertype;
        if($usertype=='1')
        {
            return view('admin.home');
        }
        else
        {
            return view('user.home');
        }

    }

    public function index()
    {
        return view('user.home');
    }


    // public function show()
    // {
    //     $products = Product::all();
    //     return view('user.home', compact('products'));
    // }



    public function show(Request $request)
    {
        
        $search = $request['search'] ?? "";

        if($search != "")
        {
            $products =  Product::where('product_name',  'LIKE', "%$search%")
                                ->orWhere('description',  'LIKE', "%$search%")
                                ->orWhere('overview',  'LIKE', "%$search%")
                                ->orWhere('hashtags',  'LIKE', "%$search%")
                                ->get();
        }
        else
        {
            
            $products = Product::all();
        }
        
        return view('user.home', compact('products', 'search'));
    } 
    


}
