<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function redirect()
    {
        return view('admin.home');
    }


    public function register()
    {
        return view('admin.userregister');
    }

    public function adduser(Request $request)
    {
        $users = new User;

        $users->name = $request->name;
        $users->email  = $request->email;
        $users->usertype = $request->usertype;
        $users->password = $request->password;
        $users->save();
        
        return view('admin.userregister');
    }


    public function showuser()
    {
        $users = User::all();

        return view('admin.userlist', compact('users'));
    }

    public function edituser($id)
    {
        $users = User::find($id);
        return view('admin.userupdate', compact('users'));
    }

    public function updateuser(Request $request, $id)
    {
        $users = User::find($id);
        $users->name = $request->name;
        $users->email  = $request->email;
        $users->usertype = $request->usertype;
        $users->password = $request->password;
        $users->update();

        return redirect()->back();
        // return view('admin.userlist');

    }

    public function deleteuser($id)
    {
        $users = User::find($id);
        $users->delete();
        return view('admin.userlist');
    }
}
