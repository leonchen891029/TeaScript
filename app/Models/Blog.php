<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
	protected $hidden=['pageToken','created_at','updated_at'];

    public static function getBlog($id){
        return Blog::find($id);
    }

    public function about(){
    	return $this->hasMany('App\Models\About','blog_id','id');
    }

    public function comment(){
    	return $this->hasMany('App\Models\Comment','blog_id','id');
    }

    public function pagebean(){
    	return $this->belongTo('App\Models\PageBean','pageToken','pageToken');
    }

}
