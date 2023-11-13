<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function addproduct()
    {
        return view('user.product');
    }
}
