<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admincontroller extends Controller
{
    public function loginPost(Request $request)
    {
        $credentials = $request->only('email', 'password');
        return $credentials;
    }

    public function statics (){
        $adminUser= Auth::guard('admin')->user();
        return view('admin.statics', ['user'=>$adminUser]);
    }

    public function dashboard()
    {
        if (Auth::guard('admin')->check()) {
            return view('admin.dashboard');
        } else {
            return redirect('admin/login');
        }
    }
}
