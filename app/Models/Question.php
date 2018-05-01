<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //设置默认隐藏的属性
    protected $hidden=['pageToken','created_at','updated_at'];

    //通过id获取Question对象
    public static function getQuestion($id){
    	return Question::find($id);
    }

    //设置与QuestionPageBean的一对多的关系
    public function questionPageBean(){
    	return $this->belongTo('App\Models\QuestionPageBean','pageToken','pageToken');
    }

    //设置与QuestionTags的一对多关系
    public function questionTags(){
    	return $this->hasMany('App\Models\QuestionTags','question_id','id');
    }
    
}
