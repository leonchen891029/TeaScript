<?php

use Illuminate\Database\Seeder;

class QuestionPageBeanTableTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
        	'title'=>'TeaScript你真的了解吗?',
        	'body'=>'这门语言到底有多牛逼?',
        	'author'=>'leon chen',
        	'authorId'=>'1',
        	'authorPortrait'=>'http://www.teascript.cn/image/leon.jpg',
        	'pubDate'=>'2018-4-28 16:16:16',
        	'commentCount'=>66,
        	'viewCount'=>23,
        	'favorite'=>'true',
        	'href'=>'nono',
        	'type'=>1,
        	'pageToken'=>'igferrari430yyf'
        ]);

        DB::table('questions')->insert([
        	'title'=>'TVM是怎样的一款虚拟机呢?',
        	'body'=>'充满小疑问?',
        	'author'=>'leon chen',
        	'authorId'=>'1',
        	'authorPortrait'=>'http://www.teascript.cn/image/leon.jpg',
        	'pubDate'=>'2018-4-28 16:16:16',
        	'commentCount'=>99,
        	'viewCount'=>32,
        	'favorite'=>'true',
        	'href'=>'nono',
        	'type'=>1,
        	'pageToken'=>'igferrari430yyf'
        ]);

        DB::table('questions')->insert([
        	'title'=>'分享一下TeaScript这门语言的学习体验',
        	'body'=>'开始听陈老师上课啦',
        	'author'=>'leon chen',
        	'authorId'=>'1',
        	'authorPortrait'=>'http://www.teascript.cn/image/leon.jpg',
        	'pubDate'=>'2018-4-28 16:16:16',
        	'commentCount'=>66,
        	'viewCount'=>23,
        	'favorite'=>'true',
        	'href'=>'nono',
        	'type'=>2,
        	'pageToken'=>'igferrari430yyf'
        ]);

        DB::table('questions')->insert([
        	'title'=>'Tea3D学习总结',
        	'body'=>'一些个人的小体会',
        	'author'=>'leon chen',
        	'authorId'=>'1',
        	'authorPortrait'=>'http://www.teascript.cn/image/leon.jpg',
        	'pubDate'=>'2018-4-28 16:16:16',
        	'commentCount'=>88,
        	'viewCount'=>0,
        	'favorite'=>'true',
        	'href'=>'nono',
        	'type'=>2,
        	'pageToken'=>'igferrari430yyf'
        ]);

        DB::table('questions')->insert([
        	'title'=>'这门语言好找工作吗?',
        	'body'=>'请相关公司联系我',
        	'author'=>'leon chen',
        	'authorId'=>'1',
        	'authorPortrait'=>'http://www.teascript.cn/image/leon.jpg',
        	'pubDate'=>'2018-4-28 16:16:16',
        	'commentCount'=>88,
        	'viewCount'=>0,
        	'favorite'=>'true',
        	'href'=>'nono',
        	'type'=>4,
        	'pageToken'=>'igferrari430yyf'
        ]);


        DB::table('questions')->insert([
        	'title'=>'招聘:网站需要你',
        	'body'=>'诚招有识之士',
        	'author'=>'leon chen',
        	'authorId'=>'1',
        	'authorPortrait'=>'http://www.teascript.cn/image/leon.jpg',
        	'pubDate'=>'2018-4-28 16:16:16',
        	'commentCount'=>88,
        	'viewCount'=>0,
        	'favorite'=>'true',
        	'href'=>'nono',
        	'type'=>5,
        	'pageToken'=>'igferrari430yyf'
        ]);

        DB::table('questions')->insert([
        	'title'=>'店长推荐:TeaScript你真的了解吗?',
        	'body'=>'这门语言到底有多牛逼?',
        	'author'=>'leon chen',
        	'authorId'=>'1',
        	'authorPortrait'=>'http://www.teascript.cn/image/leon.jpg',
        	'pubDate'=>'2018-4-28 16:16:16',
        	'commentCount'=>66,
        	'viewCount'=>23,
        	'favorite'=>'true',
        	'href'=>'nono',
        	'type'=>1,
        	'pageToken'=>'question_page_token_default'
        ]);


        DB::table('questions')->insert([
        	'title'=>'店长推荐:分享一下TeaScript这门语言的学习体验',
        	'body'=>'开始听陈老师上课啦',
        	'author'=>'leon chen',
        	'authorId'=>'1',
        	'authorPortrait'=>'http://www.teascript.cn/image/leon.jpg',
        	'pubDate'=>'2018-4-28 16:16:16',
        	'commentCount'=>66,
        	'viewCount'=>23,
        	'favorite'=>'true',
        	'href'=>'nono',
        	'type'=>2,
        	'pageToken'=>'question_page_token_default'
        ]);






    }
}
