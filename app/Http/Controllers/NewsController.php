<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PageBean;

use App\Http\Resources\NewsResource;

class NewsController extends Controller
{
    public function show($pageToken){
    	return new NewsResource(PageBean::where('pageToken',$pageToken)->first());
    }
}
