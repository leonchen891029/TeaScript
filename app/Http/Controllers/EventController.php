<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\EventPageBean;

use App\Http\Resources\EventResource;

use Carbon\Carbon;

class EventController extends Controller
{
    public function getEventData(Request $request){

    	//获取输入参数pageToken
    	$pageToken=$request->input('pageToken');
    	//获取相应的EventPageBean对象
    	$pageBean=EventPageBean::getEventPageBean($pageToken);
        //如果获取不到EventPageBean对象的话
    	if(!$pageBean){
    		return [
                'result'=>'',
                'code'=>0,
                'message'=>'活动列表获取失败',
                'time'=>Carbon::now()->toDateTimeString()
            ];
    	}else{
    		return new EventResource($pageBean);
    	}

    }

}
