<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teatime extends Model
{
    protected $hidden=['created_at','updated_at'];

    public static function getMyTeatimeList($authorId,$pageIndex){
    	Teatime::where('authorId',$authorId)->where('pageIndex',$pageIndex)->get();
    }

    public static function getTeatimeList($catalog,$pageIndex){
    	Teatime::where('catalog',$catalog)->where('pageIndex',$pageIndex)->get();
    }

    public function user(){
    	return $this->belongToMany('App\User');
    }

}
