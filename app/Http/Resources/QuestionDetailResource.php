<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

use Carbon\Carbon;

class QuestionDetailResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'result'=>[
                "id"=>$this->id,
                "title"=>$this->title,
                "body"=>$this->body,
                "author"=>$this->author,
                "authorId"=>$this->authorId,
                "authorPortrait"=>$this->authorPortrait,
                "pubDate"=>$this->pubDate,
                "commentCount"=>$this->commentCount,
                "viewCount"=>$this->viewCount,
                "favorite"=>$this->favorite,
                "href"=>$this->href,
                "type"=>$this->type
                "tags"=>$this->questionTags;
            ],
            'code'=>1,
            'message'=>'问答详情获取成功',
            'time'=>Carbon::now()->toDateTimeString()
        ];
    }
}
