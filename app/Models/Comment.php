<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $hidden=['created_at','updated_at'];

    public function news(){
    	$this->belongTo('App\Models\News','id','news_id');
    }

    public function blog(){
    	$this->belongTo('App\Models\Blog','id','blog_id');
    }

    public function refer(){
    	$this->hasOne('App\Models\Refer','comment_id','id');
    }

}
