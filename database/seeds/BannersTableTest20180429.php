<?php

use Illuminate\Database\Seeder;

class BannersTableTest20180429 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banners')->insert([
        	'name'=>'TeaScript推广活动',
        	'detail'=>'是兄弟你就来!',
        	'img'=>'www.teascript.cn/image/event_teascript.png',
        	'href'=>'www.teascript.cn/teascript.php',
        	'pubDate'=>'2018-4-29 00:00:00',
        	'type'=>4,
        	'pageToken'=>'eventteascriptofficial2018',
        	'dataId'=>1
        ]);

        DB::table('banners')->insert([
        	'name'=>'TVM推广活动',
        	'detail'=>'全新虚拟机等你来体验!',
        	'img'=>'www.teascript.cn/image/event_tvm.png',
        	'href'=>'www.teascript.cn/tvm.php',
        	'pubDate'=>'2018-4-29 00:00:00',
        	'type'=>4,
        	'pageToken'=>'eventteascriptofficial2018',
        	'dataId'=>2
        ]);

        DB::table('banners')->insert([
        	'name'=>'Tea3D试用活动',
        	'detail'=>'Meet the future!',
        	'img'=>'www.teascript.cn/image/event_tea3d.png',
        	'href'=>'www.teascript.cn/ide.php',
        	'pubDate'=>'2018-4-29 00:00:00',
        	'type'=>4,
        	'pageToken'=>'eventteascriptofficial2018',
        	'dataId'=>3
        ]);
    }
}
