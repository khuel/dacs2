<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Base;

class Admin extends Base 
{
    use HasFactory;

    public $title="ADMIN";

    public function listingConfigs(){
        $defautlistingConfigs = parent::defautlistingConfigs();
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
            )
        );
    }
}
