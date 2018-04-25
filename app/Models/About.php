<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $hidden=['created_at','updated_at'];

    public function news(){
    	return $this->belongsTo('App\Models\News','id','news_id');
    }

}
