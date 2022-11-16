<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function listingConfigs(){
        return array(
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
    }
}
