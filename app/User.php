<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function teatime(){
        return $this->belongToMany('App\Models\Teatime');
    }

    //定义用于注册使用的验证规则静态变量
    public static $registerRules=array(
        'name'=>'required|alpha|min:2',
        'email'=>'required|email|unique:users',
        'password'=>'required|alpha_num|between:6,12|confirmed',
        'password_confirmation'=>'required|alpha_num|between:6,12'
    );

}
