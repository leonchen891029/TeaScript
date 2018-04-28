<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //设置默认隐藏的属性
    protected $hidden=['pageToken','created_at','updated_at'];

    //设置与QuestionPageBean的一对多的关系
    public function questionPageBean(){
    	return $this->belongTo('App\Model\QuestionPageBean','pageToken','pageToken');
    }
    
}
