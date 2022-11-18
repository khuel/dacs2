<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Base extends Model
{
    use HasFactory;

    public function getRecords($conditions){
        $per_page=5;
       return self::where($conditions)->paginate($per_page);
    }

    public function getFilter($request, $configs){
        
        if($request->method()=="POST"){
            foreach($configs as $config){
                if(!empty($config['filter'])) {
                    $value= $request->input($config['field']);
                    switch($config['filter']){
                        case "equal":
                            if(!empty($value)){
                                $conditions[]=[
                                    'field' =>$config['field'],
                                    'codition'=>'=',
                                    'value'=> $value
                                ];
                            }
                           
                            break;
                        case "like":
                            if(!empty($value)){
                                $conditions[]=[
                                    'field'=>$config['field'],
                                    'condition' =>'like',
                                    'value'=> '%'.$value.'%'
                                ];
                            }
                            break;
                        case "between":
                            if(!empty($value['from'])){
                                $conditions[]=[
                                    'field' =>$config['field'],
                                    'codition'=>'>=',
                                    'value'=> $value['from']
                                ];
                            }
                            if(!empty($value['to'])){
                                $conditions[]=[
                                    'field' =>$config['field'],
                                    'codition'=>'<=',
                                    'value'=> $value['to']
                                ];
                            }
                            break;
                    }
                }
            }
        }
        // var_dump($conditions);exit;
        return $conditions;
    }

    public function defautlistingConfigs(){
        return array(
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
            array(
                'field'=>'copy',
                'name'=>'Sao chép',
                'type'=>'copy'
            ),
            array(
                'field'=>'edit',
                'name'=>'Sửa',
                'type'=>'edit'
            ),
            array(
                'field'=>'delete',
                'name'=>'Xoá',
                'type'=>'delete'
            ),
        );
    }
}
