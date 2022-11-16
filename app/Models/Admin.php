<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Model 
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
                'name'=>'Tên nhân viên',
                'type'=>'text'
            ),
            array(
                'field'=>'email',
                'name'=>'Email liên lạc',
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
