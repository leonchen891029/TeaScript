<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

use Carbon\Carbon;

class NewsDetailResource extends Resource
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
                    "commentCount"=>$this->commentCount,
                    "type"=>$this->type,
                    "recommend"=>$this->recommend,
                    "title"=>$this->title,
                    "body"=>$this->body,
                    "author"=>$this->author,
                    "href"=>$this->href,
                    "pubDate"=>$this->pubDate,
                    "viewCount"=>$this->viewCount,
                    "favorite"=>$this->favorite,
                    "authorId"=>$this->authorId,
                    "authorPortrait"=>$this->authorPortrait,
                    "abouts"=>$this->about,
                    "software"=>$this->software
                ],
                'code'=>1,
                'message'=>'资讯列表获取成功',
                'time'=>Carbon::now()->toDateTimeString()
            ];
    }
}
