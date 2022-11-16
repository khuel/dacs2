<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function listingConfigs(){
        return array(
            array(
                'field'=>'id',
                'name'=>'ID',
                'type'=>'text'
            ),
       
            array(
                'field'=>'name',
                'name'=>'Tên khách hàng',
                'type'=>'text'
            ),
            array(
                'field'=>'email',
                'name'=>'Email đăng nhập',
                'type'=>'text'
            ),
            array(
                'field'=>'email_verified_at',
                'name'=>'Thời gian được xác nhận',
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
