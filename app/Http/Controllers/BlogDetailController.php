<?php

namespace App\Http\Controllers;

use App\Models\Blog;

use App\Http\Resources\BlogDetailResource;

use Carbon\Carbon;

use Illuminate\Http\Request;

class BlogDetailController extends Controller
{
    public function getBlogDetailData(Request $request){

		$id=$request->input('id');

		$blog=Blog::getBlog($id);

		if(!$blog){
			return [
			    'result'=>'',
                'code'=>0,
                'message'=>'博客详情获取失败',
                'time'=>Carbon::now()->toDateTimeString()
			];
		}else{
			return new BlogDetailResource($blog);
		}

	}
}
