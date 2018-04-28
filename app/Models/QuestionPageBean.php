<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuestionPageBean extends Model
{    
    //根据pageToken获取单个QuestionPageBean对象
    public static function getQuestionPageBean($pageToken){
    	return QuestionPageBean::where('pageToken',$pageToken)->first();
    }
    //定义与Question类的一对多关系
    public function question(){
     	return $this->hasMany('App\Models\Question','pageToken','pageToken');
    }

}
