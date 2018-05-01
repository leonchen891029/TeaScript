<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\QuestionPageBean;

use App\Http\Resources\QuestionAskResource;

use App\Http\Resources\QuestionShareResource;

use App\Http\Resources\QuestionCompositeResource;

use App\Http\Resources\QuestionProfessionResource;

use App\Http\Resources\QuestionWebsiteResource;

class QuestionController extends Controller
{
    //获取问答数据
    public function getQuestionData(Request $request){
    	//获取type参数
    	$type=$request->input('type');
    	//获取pageToken参数
    	$pageToken=$request->input('pageToken');
    	//首先验证是否有pageToken参数,如果没有加载一个默认值
    	if(!$pageToken){
    		$pageToken='question_page_token_default';
    	}
    	//获取相应的QuestionPageBean对象(更具自定义函数)
    	$pageBean=QuestionPageBean::getQuestionPageBean($pageToken);
    	//根据type参数返回特定的QuestionXXXXResource资源类
    	switch($type){
    		case 1:
    		return new QuestionAskResource($pageBean);
    		break;
    		case 2:
    		return new QuestionShareResource($pageBean);
    		break;
    		case 3:
    		return new QuestionCompositeResource($pageBean);
    		break;
    		case 4:
    		return new QuestionProfessionResource($pageBean);
    		break;
    		case 5:
    		return new QuestionWebsiteResource($pageBean);
    		break;
    	}
    }

}
