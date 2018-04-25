<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\News;

use App\Http\Resources\NewsDetailResource;

use Carbon\Carbon;

class NewsDetailController extends Controller
{
	public function getNewsDetailData(Request $request){

		$id=$request->input('id');

		$news=News::getNews($id);

		if(!$news){
			return [
			    'result'=>'',
                'code'=>0,
                'message'=>'资讯详情获取失败',
                'time'=>Carbon::now()->toDateTimeString()
			];
		}else{
			return new NewsDetailResource($news);
		}

	}
    
}
