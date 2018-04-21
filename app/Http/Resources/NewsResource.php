<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class NewsResource extends Resource
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
                    "itemsList"=>$this->news,
                    "nextPageToken"=>$this->nextPageToken,
                    "prevPageToken"=>$this->prevPageToken,
                    "pageInfo"=>[
                         "totalResults"=>5,
                         "resultPerPage"=>10,
                    ]
                ],
                'code'=>1,
                'message'=>'资讯列表获取成功',
                'time'=>'00:00',
            ];
    }

}
