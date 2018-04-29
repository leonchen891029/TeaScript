<?php

use Illuminate\Database\Seeder;

class EventTableTestSeeder20180429 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
        	'applyCount'=>999,
        	'status'=>2,
        	'type'=>1,
        	'title'=>'TeaScript推广活动',
        	'body'=>'是兄弟，你就来!',
        	'img'=>'http://www.teascript.cn/image/event_teascript.png',
        	'startDate'=>'2018-6-1 06:06:06',
        	'endDate'=>'2018-12-31 12:59:59',
        	'pubDate'=>'2018-4-29 00:00:00',
        	'href'=>'nono',
        	'author'=>'leon chen',
        	'authorId'=>'1',
        	'authorPortrait'=>'http://www.teascript.cn/image/leon.jpg',
        	'commentCount'=>'99'
        	'viewCount'=>'111',
        	'spot'=>'上海交通大学闵行校区'
        	'location'=>'闵行区',
        	'city'=>'上海',
        	'costDesc'=>'免费',
        	'favorite'=>'true',
        	'applyStatus'=>0,
        	'pageToken'=>'eventteascriptofficial2018'
        ]);

        DB::table('events')->insert([
        	'applyCount'=>888,
        	'status'=>2,
        	'type'=>1,
        	'title'=>'TVM推广活动',
        	'body'=>'全新虚拟机等你来体验!',
        	'img'=>'http://www.teascript.cn/image/event_tvm.png',
        	'startDate'=>'2018-6-1 06:06:06',
        	'endDate'=>'2018-12-31 12:59:59',
        	'pubDate'=>'2018-4-29 00:00:00',
        	'href'=>'nono',
        	'author'=>'leon chen',
        	'authorId'=>'1',
        	'authorPortrait'=>'http://www.teascript.cn/image/leon.jpg',
        	'commentCount'=>'100'
        	'viewCount'=>'999',
        	'spot'=>'上海交通大学闵行校区'
        	'location'=>'闵行区',
        	'city'=>'上海',
        	'costDesc'=>'免费',
        	'favorite'=>'true',
        	'applyStatus'=>0,
        	'pageToken'=>'eventteascriptofficial2018'
        ]);

          DB::table('events')->insert([
        	'applyCount'=>1000,
        	'status'=>2,
        	'type'=>1,
        	'title'=>'Tea3D试用活动',
        	'body'=>'Meet the future!',
        	'img'=>'http://www.teascript.cn/image/event_tea3d.png',
        	'startDate'=>'2018-6-1 06:06:06',
        	'endDate'=>'2018-12-31 12:59:59',
        	'pubDate'=>'2018-4-29 00:00:00',
        	'href'=>'nono',
        	'author'=>'leon chen',
        	'authorId'=>'1',
        	'authorPortrait'=>'http://www.teascript.cn/image/leon.jpg',
        	'commentCount'=>'222'
        	'viewCount'=>'1001',
        	'spot'=>'上海交通大学徐汇校区'
        	'location'=>'闵行区',
        	'city'=>'上海',
        	'costDesc'=>'免费',
        	'favorite'=>'true',
        	'applyStatus'=>0,
        	'pageToken'=>'eventteascriptofficial2018'
        ]);

    }
}
