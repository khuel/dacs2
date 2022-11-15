<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class listingcontroller extends Controller
{
    public function index ( Request $request, $modelName)
    {
        $model = '\App\Models\\'.ucfirst($modelName) ;
        $records= $model:: paginate(15);
        $adminUser= Auth::guard('admin')->user();
        $configs= array(
            array(
                'field'=>'id',
                'name'=>'ID',
                'type'=>'text'
            ),
       
            array(
                'field'=>'name',
                'name'=>'Tên sản phẩm',
                'type'=>'text'
            ),
            array(
                'field'=>'image',
                'name'=>'Ảnh sản phẩm',
                'type'=>'image'
            ),
            array(
                'field'=>'price',
                'name'=>'Giá sản phẩm',
                'type'=>'number'
            ),
            array(
                'field'=>'created_at',
                'name'=>'Ngày tạo',
                'type'=>'text'
            ),
            array(
                'field'=>'upadted_at',
                'name'=>'Ngày cập nhật',
                'type'=>'text'
            ),
        );
        return view('admin.listing', [
            'user'=>$adminUser,
            'records'=>$records,
            'configs'=>$configs
        ]);
    }

    
    
}
