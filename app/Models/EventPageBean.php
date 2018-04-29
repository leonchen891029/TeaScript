<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventPageBean extends Model
{

    protected $hidden=['created_at','updated_at'];

    //根据pageToken获取当个EventPageBean对象
    public static function getEventPageBean($pageToken){
    	return EventPageBean::where('pageToken',$pageToken)->first();
    }

    //定义与Event类的一对多关系
    public function event(){
    	return $this->hasMany('App\Models\Event','pageToken','pageToken');
    }

}
