<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admincontroller extends Controller
{
    public function loginPost(Request $request){
        $credentials= $request->only('email', 'password');
        if(Auth::guard('admin')->attempt($credentials)){
            return redirect()->route('admin.dashboard');
        }else{
            echo"danh nhap loi";
            
        }
    }
    
    public function dashboard(){
        if(Auth::guard('admin')->check()){
            return view('admin.dashboard');
        }else{
           return redirect('admin/login');
            
        }
    }
}
