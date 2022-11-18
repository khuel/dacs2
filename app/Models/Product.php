<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Base;

class Product extends Base
{
    use HasFactory;
public $title="SẢN PHẨM ";
    public function listingConfigs(){
        $defautlistingConfigs = parent::defautlistingConfigs();
        $listingConfigs= array(
            array(
                'field'=>'id',
                'name'=>'ID',
                'type'=>'text',
                'filter'=>'equal'
            ),
       
            array(
                'field'=>'name',
                'name'=>'Tên sản phẩm',
                'type'=>'text',
                'filter'=>'like'
            ),
            array(
                'field'=>'image',
                'name'=>'Ảnh sản phẩm',
                'type'=>'image'
            ),
            array(
                'field'=>'price',
                'name'=>'Giá sản phẩm',
                'type'=>'number',
                'filter'=>'between'
            )
        );
        return array_merge($listingConfigs, $defautlistingConfigs);
    }
}
