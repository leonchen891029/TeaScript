<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Software extends Model
{
	protected $table="softwares";

    protected $hidden=['created_at','updated_at'];

     public function news(){
    	return $this->belongsTo('App\Models\News','id','id');
    }
}
