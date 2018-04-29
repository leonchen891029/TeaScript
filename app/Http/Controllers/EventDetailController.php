<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

use Carbon\Carbon;

use App\Http\Resources\EventDetailResources;

class EventDetailController extends Controller
{
    public function getEventDetailData(Request $request){

    	$id=$request->input('id');

    	$event=Event::getEvent($id);

    	if(!$event){
    		return [
			    'result'=>'',
                'code'=>0,
                'message'=>'活动详情获取失败',
                'time'=>Carbon::now()->toDateTimeString()
			];
    	}else{
    		return new EventDetailResources($event);
    	}

    }

}
