<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Base;

class User extends Base
{
    use HasFactory;
    public $title="KHÁCH HÀNG";

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
                'name'=>'Tên sản khách hàng',
                'type'=>'text',
                'filter'=>'like'
            ),
            array(
                'field'=>'email',
                'name'=>'Email',
                'type'=>'text',
                'filter'=>'like'
            )
        );
        return array_merge($listingConfigs, $defautlistingConfigs);
    }
}
