<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class listingcontroller extends Controller
{
    public function index ( Request $request, $modelName)
    {
        $model= '\App\Models\\'.ucfirst($modelName);
        $records = $model::paginate(15);
        var_dump($model);exit;
        return view('admin.listing');
    }
}
