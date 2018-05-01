<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PageBean;

use App\Http\Resources\BlogResource;

use Carbon\Carbon;

class BlogController extends Controller
{
    public function getBlogData(Request $request){
   
		$catalog=$request->input('catalog');

		if($catalog==2){

			$pageToken="blogheat";

			$pageBean=PageBean::getPageBean($pageToken);

			if(!$pageBean){
        	   return [
                  'result'=>'',
                  'code'=>0,
                  'message'=>'博客列表获取失败',
                  'time'=>Carbon::now()->toDateTimeString()
                ];
            }else{
        	   return new BlogResource($pageBean);
            }

		}else{

			$pageToken=$request->input('pageToken');

			if(!$pageToken){
				$pageToken="blognormaldefault";
			}

			$pageBean=PageBean::getPageBean($pageToken);

			if(!$pageBean){
        	  return [
                 'result'=>'',
                 'code'=>0,
                 'message'=>'博客列表获取失败',
                 'time'=>Carbon::now()->toDateTimeString()
              ];
            }else{
        	  return new BlogResource($pageBean);
            }

		}

	}
}
