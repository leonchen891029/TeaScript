<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Question;

use App\Http\Resources\QuestionDetailResource;

use Carbon\Carbon;

class QuestionDetailController extends Controller
{
    public function getQuestionDetailData(Request $request){

    	$id=$request->input('id');

    	$question=Question::getQuestion($id);

    	if(!$question){
			return [
			    'result'=>'',
                'code'=>0,
                'message'=>'问答详情获取失败',
                'time'=>Carbon::now()->toDateTimeString()
			];
		}else{
			return new QuestionDetailResource($question);
		}

    }
}
