<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
	protected $hidden=['pageToken','created_at','updated_at'];

    public static function getBlog($id){
        return Blog::find($id);
    }

    protected $hidden=['pageToken','created_at','updated_at'];

    public function about(){
    	$this->hasMany('App\Models\About','blog_id','id');
    }

    public function comment(){
    	$this->hasMany('App\Models\Comment','blog_id','id');
    }

    public function pagebean(){
    	$this->hasMany('App\Models\About','pageToken','pageToken');
    }

}
