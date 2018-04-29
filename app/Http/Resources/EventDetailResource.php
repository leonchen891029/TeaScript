<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

use Carbon\Carbon;

class EventDetailResource extends Resource
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
                "applyCount"=>$this->applyCount,
                "status"=>$this->status,
                "type"=>$this->type,
                "title"=>$this->title,
                "body"=>$this->body,
                "img"=>$this->img,
                "startDate"=>$this->startDate,
                "endDate"=>$this->endDate,
                "pubDate"=>$this->pubDate,
                "href"=>$this->href,
                "author"=>$this->author,
                "authorId"=>$this->authorId,
                "authorPortrait"=>$this->authorPortrait,
                "commentCount"=>$this->commentCount,
                "viewCount"=>$this->viewCount,
                "spot"=>$this->spot,
                "location"=>$this->location,
                "city"=>$this->city,
                "costDesc"=>$this->costDesc,
                "favorite"=>$this->favorite,
                "applyStatus"=>$this->applyStatus
            ],
            'code'=>1,
            'message'=>'问答详情获取成功',
            'time'=>Carbon::now()->toDateTimeString()
        ];
    }
}
