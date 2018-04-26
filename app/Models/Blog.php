<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $hidden=['pageToken','created_at','updated_at'];

    public function about(){
    	$this->hasMany('App\Models\About','blog_id','id');
    }

}
