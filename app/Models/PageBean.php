<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageBean extends Model
{
    protected $table="pagebeans";

    public function news(){
    	return $this->hasMany('App\Models\News','pageToken','pageToken');
    }

    public function banner(){
    	return $this->hasMany('App\Models\Banner','pageToken','pageToken');
    }

     public function blog(){
        return $this->hasMany('App\Models\Blog','pageToken','pageToken');
    }

    public static function getPageBean($pageToken){
    	return PageBean::where('pageToken',$pageToken)->first();
    }
    
}
