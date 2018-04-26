<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class BlogResource extends Resource
{
    return [
            'result'=>[
                "itemsList"=>$this->blog,
                "nextPageToken"=>$this->nextPageToken,
                "prevPageToken"=>$this->prevPageToken,
                "pageInfo"=>[
                    "totalResults"=>5,
                    "resultPerPage"=>10,
                 ]
            ],
            'code'=>1,
            'message'=>'资讯列表获取成功',
            'time'=>Carbon::now()->toDateTimeString()
    ];
}
