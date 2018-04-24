<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PageBean;

use App\Http\Resources\BannerResource;

class BannerController extends Controller
{
    public function getBannerList(Request $request){

        $pageToken=$request->input('pageToken');

        $pageBean=PageBean::getPageBean($pageToken);

        if(!$pageBean){
        	return [
                'result'=>'',
                'code'=>0,
                'message'=>'Banner列表获取失败',
                'time'=>'00:00',
            ];
        }else{
        	return new BannerResource($pageBean);
        }
    	
    }
}
