<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class InsertDB extends Controller
{
    // public function insert(){
    //     return view ('QuanLy/home');()
    // }
    public function get(){

        $categories = DB::select('select * from categories');
        return view('header2', ['categories'=>$categories]);

    }
}
