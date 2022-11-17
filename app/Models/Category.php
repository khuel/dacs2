<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
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
                'name'=>'Tên danh mục',
                'type'=>'text'
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
