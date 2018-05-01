<?php

use Illuminate\Database\Seeder;

class TeatimeTableTestSeeder20180430 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teatimes')->insert([
        	"author"=>"leon chen",
        	"authorId"=>1,
        	"body"=>"晚上有人聊天吗?",
        	"appClient"=>2,
        	"commentCount"=>11,
        	"pubDate"=>"2018-4-30 11:11:11",
        	"imgSmall"=>"http://www.teascript.cn/image/leon.jpg",
        	"imgBig"=>"http://www.teascript.cn/image/leon.jpg",
        	"attach"=>"nono",
        	"likeCount"=>233,
        	"isLike"=>1,
        	"imageFilePath"=>"",
        	"audioPath"=>"",
        	"pageIndex"=>0,
        	"catalog"=>0
        ]);

        DB::table('teatimes')->insert([
        	"author"=>"BoBo",
        	"authorId"=>2,
        	"body"=>"睡个毛线?",
        	"appClient"=>3,
        	"commentCount"=>22,
        	"pubDate"=>"2018-4-30 11:11:11",
        	"imgSmall"=>"http://www.teascript.cn/image/bobo.jpg",
        	"imgBig"=>"http://www.teascript.cn/image/bobo.jpg",
        	"attach"=>"nono",
        	"likeCount"=>666,
        	"isLike"=>1,
        	"imageFilePath"=>"",
        	"audioPath"=>"",
        	"pageIndex"=>0,
        	"catalog"=>0
        ]);

        DB::table('teatimes')->insert([
        	"author"=>"leon chen",
        	"authorId"=>1,
        	"body"=>"欧冠开始了！?",
        	"appClient"=>2,
        	"commentCount"=>120,
        	"pubDate"=>"2018-4-30 11:11:11",
        	"imgSmall"=>"http://www.teascript.cn/image/leon.jpg",
        	"imgBig"=>"http://www.teascript.cn/image/leon.jpg",
        	"attach"=>"nono",
        	"likeCount"=>999,
        	"isLike"=>1,
        	"imageFilePath"=>"",
        	"audioPath"=>"",
        	"pageIndex"=>0,
        	"catalog"=>0
        ]);

         DB::table('teatimes')->insert([
        	"author"=>"BoBo",
        	"authorId"=>2,
        	"body"=>"尤文加油!",
        	"appClient"=>3,
        	"commentCount"=>77,
        	"pubDate"=>"2018-4-30 11:11:11",
        	"imgSmall"=>"http://www.teascript.cn/image/bobo.jpg",
        	"imgBig"=>"http://www.teascript.cn/image/bobo.jpg",
        	"attach"=>"nono",
        	"likeCount"=>88,
        	"isLike"=>1,
        	"imageFilePath"=>"",
        	"audioPath"=>"",
        	"pageIndex"=>0,
        	"catalog"=>-1
        ]);

        DB::table('teatimes')->insert([
        	"author"=>"leon chen",
        	"authorId"=>1,
        	"body"=>"你踢球那么吊，现实中怎么看不到?",
        	"appClient"=>2,
        	"commentCount"=>120,
        	"pubDate"=>"2018-4-30 11:11:11",
        	"imgSmall"=>"http://www.teascript.cn/image/leon.jpg",
        	"imgBig"=>"http://www.teascript.cn/image/leon.jpg",
        	"attach"=>"nono",
        	"likeCount"=>0,
        	"isLike"=>0,
        	"imageFilePath"=>"",
        	"audioPath"=>"",
        	"pageIndex"=>0,
        	"catalog"=>-1
        ]);
    }
}
