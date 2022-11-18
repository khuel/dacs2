<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class listingcontroller extends Controller
{
    public function index ( Request $request, $modelName)
    {
        $adminUser= Auth::guard('admin')->user();
        $model = '\App\Models\\'.ucfirst($modelName) ;
        $model = new $model;
        $configs =$model->listingConfigs();
        $conditions = $model->getFilter($request, $configs);
        $records= $model->getRecords($conditions);
        return view('admin.listing', [
            'user'=>$adminUser,
            'records'=>$records,
            'modelName'=>$modelName,
            'configs'=>$configs,
            'title'=>$model->title
        ]);
    }


    
    
}
