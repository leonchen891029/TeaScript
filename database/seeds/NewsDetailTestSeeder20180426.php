<?php

use Illuminate\Database\Seeder;

class NewsDetailTestSeeder20180426 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
        	'commentCount'=>999,
        	'type'=>0,
        	'recommend'=>true,
        	'title'=>'TeaScript',
        	'body'=>'TeaScript 未来的编程语言!',
        	'author'=>'leon chen',
        	'href'=>'nono',
        	'pubDate'=>'你懂的',
        	'viewCount'=>999,
        	'pageToken'=>'igferrari430zhouyyfchuanfaith',
        	"favorite"=>'true',
            "authorId"=>0,
            "authorPortrait"=>'http://www.teascript.cn/image/leon.png'
        ]);

        DB::table('news')->insert([
        	'commentCount'=>999,
        	'type'=>0,
        	'recommend'=>true,
        	'title'=>'TVM',
        	'body'=>'TVM 全新的虚拟机!',
        	'author'=>'leon chen',
        	'href'=>'nono',
        	'pubDate'=>'你懂的',
        	'viewCount'=>999,
        	'pageToken'=>'igferrari430zhouyyfchuanfaith',
        	"favorite"=>'true',
            "authorId"=>0,
            "authorPortrait"=>'http://www.teascript.cn/image/bobo.png'
        ]);
    }
}
