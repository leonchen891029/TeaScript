<?php

use Illuminate\Database\Seeder;

class CommentTableTestSeeder20180427 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('comments')->insert([
        	'authorId'=>1,
        	'author'=>'leon chen',
        	'authorPortrait'=>'http://www.teascript.cn/image/leon.jpg',
        	'content'=>'你真是一个天才!',
        	'pubDate'=>'2018-4-27 02-02-02',
        	'appClient'=>1,
        	'news_id'=>1,
        ]);

         DB::table('comments')->insert([
        	'authorId'=>1,
        	'author'=>'leon chen',
        	'authorPortrait'=>'http://www.teascript.cn/image/leon.jpg',
        	'content'=>'你还能更秀一些吗?!',
        	'pubDate'=>'2018-4-27 02-02-02',
        	'appClient'=>1,
        	'news_id'=>1,
        ]);

        DB::table('comments')->insert([
        	'authorId'=>2,
        	'author'=>'bobo',
        	'authorPortrait'=>'http://www.teascript.cn/image/bobo.jpg',
        	'content'=>'我报警啦!',
        	'pubDate'=>'2018-4-27 02-02-02',
        	'appClient'=>1,
        	'news_id'=>1,
        ]);

         DB::table('comments')->insert([
        	'authorId'=>2,
        	'author'=>'bobo',
        	'authorPortrait'=>'http://www.teascript.cn/image/bobo.jpg',
        	'content'=>'我报警啦!',
        	'pubDate'=>'2018-4-27 02-02-02',
        	'appClient'=>1,
        	'news_id'=>1,
        ]);

        DB::table('comments')->insert([
        	'authorId'=>2,
        	'author'=>'bobo',
        	'authorPortrait'=>'http://www.teascript.cn/image/bobo.jpg',
        	'content'=>'羽泉!',
        	'pubDate'=>'2018-4-27 02-02-02',
        	'appClient'=>1,
        	'news_id'=>2,
        ]);

        DB::table('comments')->insert([
        	'authorId'=>2,
        	'author'=>'bobo',
        	'authorPortrait'=>'http://www.teascript.cn/image/bobo.jpg',
        	'content'=>'双栖动物!',
        	'pubDate'=>'2018-4-27 02-02-02',
        	'appClient'=>1,
        	'news_id'=>2,
        ]);

    }
}
