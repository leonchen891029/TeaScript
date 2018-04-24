<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $hidden=['pageToken','created_at','updated_at'];

    public function pagerBean(){
    	return $this->belongsTo('App\Models\PageBean','pageToken','pageToken');
    }
}
