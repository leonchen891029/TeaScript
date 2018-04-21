<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{

	protected $hidden=['created_at','updated_at'];

    public function pagerBean(){
    	return $this->belongsTo('App\Models\PageBean','pageToken','pageToken');
    }

    
}
