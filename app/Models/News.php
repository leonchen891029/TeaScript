<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{

	protected $hidden=['pageToken','created_at','updated_at'];

    public static function getNews($id){
        return News::find($id);
    }

    public function pageBean(){
    	return $this->belongsTo('App\Models\PageBean','pageToken','pageToken');
    }

    public function about(){
    	return $this->hasMany('App\Models\About','news_id','id');
    }

    public function software(){
    	return $this->hasOne('App\Models\Software','id','id');
    }

    public function comment(){
        return $this->hasMany('App\Models\Comment','news_id','id');
    }

}
