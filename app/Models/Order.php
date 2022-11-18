<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Basel;


class Order extends Base
{
    use HasFactory;
    public $title="ĐƠN HÀNG";
    public function listingConfigs(){
        $listingConfigs= array(
            array(
                'field'=>'id',
                'name'=>'ID',
                'type'=>'text',
                'filter'=>'equal'
            ),
       
            array(
                'field'=>'name',
                'name'=>'Tên khách hàng',
                'type'=>'text',
                'filter'=>'like'
            ),
            array(
                'field'=>'address',
                'name'=>'Địa chỉ giao hàng',
                'type'=>'text',
                'filter'=>'like'
            ),
            array(
                'field'=>'phone',
                'name'=>'Số điện thoại khách hàng',
                'type'=>'text',
                'filter'=>'like'
            ),
            array(
                'field'=>'created_day',
                'name'=>'Ngày tạo',
                'type'=>'text'
            ),
            array(
                'field'=>'status',
                'name'=>'Tình trạng',
                'type'=>'text'
            ),
            
        );
    }
}
