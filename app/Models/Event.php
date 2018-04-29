<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $hidden=['created_at','updated_at'];

    //通过id来获取Event对象
    public static function getEvent($id){
    	return Event::find($id);
    }

    //定义与EventPageBean的一对多关系
    public function eventPageBean(){
    	return $this->belongTo('App\Models\EventPageBean','pageToken','pageToken');
    }

}
