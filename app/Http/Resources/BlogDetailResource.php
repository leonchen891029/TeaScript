<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

use Carbon\Carbon;

class BlogDetailResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
           public function toArray($request)
    {
        return [
                'result'=>[
                    "id"=>$this->id,
                    "title"=>$this->title,
                    "body"=>$this->body,
                    "author"=>$this->author,
                    "pubDate"=>$this->pubDate,
                    "commentCount"=>$this->commentCount,
                    "viewCount"=>$this->viewCount,
                    "href"=>$this->href,
                    "recommend"=>$this->recommend,
                    "original"=>$this->original,
                    "type"=>$this->type,
                    "viewType"=>$this->viewType
                    "favorite"=>$this->favorite,
                    "authorId"=>$this->authorId,
                    "authorPortrait"=>$this->authorPortrait,
                    "authorRelation"=>$this->authorRelation,
                    "category"=>$this->category,
                    "abstract"=>$this->abstract,
                    "abouts"=>$this->about,
                ],
                'code'=>1,
                'message'=>'博客详情获取成功',
                'time'=>Carbon::now()->toDateTimeString()
            ];
    }

    }
}
