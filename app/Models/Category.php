<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Base;

class Category extends Base
{
    use HasFactory;
    public $title="DANH MỤC";

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
                'name'=>'Tên danh mục',
                'type'=>'text',
                'filter'=>'like'
            )
        );
        return array_merge($listingConfigs, $defautlistingConfigs);
    }
}
