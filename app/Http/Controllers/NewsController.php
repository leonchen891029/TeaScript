<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PageBean;

use App\Http\Resources\NewsResource;

use Carbon\Carbon;

class NewsController extends Controller
{
    public function getNewsData(Request $request){

        $pageToken=$request->input('pageToken');

        $pageBean=PageBean::getPageBean($pageToken);

        if(!$pageBean){
        	return [
                'result'=>'',
                'code'=>0,
                'message'=>'资讯列表获取失败',
                'time'=>Carbon::now()->toDateTimeString()
            ];
        }else{
        	return new NewsResource($pageBean);
        }
    	
    }
}
