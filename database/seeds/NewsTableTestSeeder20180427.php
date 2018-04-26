<?php

use Illuminate\Database\Seeder;

class NewsTableTestSeeder20180427 extends Seeder
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
        	'recommend'=>'true',
        	'title'=>'TeaScript',
        	'body'=>'TeaScript 未来的编程语言!',
        	'author'=>'leon chen',
        	'href'=>'nono',
        	'pubDate'=>'2018-4-27 02-02-02',
        	'viewCount'=>999,
        	'pageToken'=>'igferrari430zhouyyfchuanfaith',
        	"favorite"=>'true',
            "authorId"=>1,
            "authorPortrait"=>'http://www.teascript.cn/image/leon.jpg'
        ]);

        DB::table('news')->insert([
        	'commentCount'=>999,
        	'type'=>0,
        	'recommend'=>'true',
        	'title'=>'TVM',
        	'body'=>'TVM 全新的虚拟机!',
        	'author'=>'leon chen',
        	'href'=>'nono',
        	'pubDate'=>'2018-4-27 02-02-02',
        	'viewCount'=>999,
        	'pageToken'=>'igferrari430zhouyyfchuanfaith',
        	"favorite"=>'true',
            "authorId"=>1,
            "authorPortrait"=>'http://www.teascript.cn/image/leon.jpg'
        ]);

          DB::table('news')->insert([
        	'commentCount'=>999,
        	'type'=>0,
        	'recommend'=>'true',
        	'title'=>'Tea3D',
        	'body'=>'Tea3D 全新的图形平台!',
        	'author'=>'leon chen',
        	'href'=>'nono',
        	'pubDate'=>'2018-4-27 02-02-02',
        	'viewCount'=>999,
        	'pageToken'=>'igferrari430zhouyyfchuanfaith',
        	"favorite"=>'true',
            "authorId"=>1,
            "authorPortrait"=>'http://www.teascript.cn/image/leon.jpg'
        ]);
    }
}
