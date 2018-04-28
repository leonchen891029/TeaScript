<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuestionTags extends Model
{
    //设置默认隐藏的属性
    protected $hidden=['created_at','updated_at'];

    //设置与Question的一对多关系
    public function question(){
    	return $this->belongTo('App\Models\Question','id','question_id');
    }
}
