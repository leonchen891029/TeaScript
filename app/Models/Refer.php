<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Refer extends Model
{
    protected $hidden=['created_at','updated_at'];

    public function comment(){
    	$this->hasOne('App\Models\Refer','id','comment_id');
    }

}
