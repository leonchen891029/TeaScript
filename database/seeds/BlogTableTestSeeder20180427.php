<?php

use Illuminate\Database\Seeder;

class BlogTableTestSeeder20180427 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
        	'title'=>'TeaScript你真的了解吗?',
        	'body'=>'这门语言简直天秀',
        	'author'=>'leon chen',
        	'authorId'=>'1',
        	'authorPortrait'=>'http://www.teascript.cn/image/leon.jpg',
        	'authorRelation'=>0,
        	'pubDate'=>'2018-4-27 02-02-02',
        	'commentCount'=>11,
        	'viewCount'=>22,
        	'href'=>'nono',
        	'recommend'=>'true',
        	'original'=>'true',
        	'type'=>1,
        	'abstract'=>'iknow',
            'favorite'=>'true',
            'category'=>'KG',
        	'pageToken'=>'blog20180427'
        ]);

        DB::table('blogs')->insert([
        	'title'=>'TVM了解一哈?',
        	'body'=>'全新虚拟机带你飞',
        	'author'=>'leon chen',
        	'authorId'=>'1',
        	'authorPortrait'=>'http://www.teascript.cn/image/leon.jpg',
        	'authorRelation'=>0,
        	'pubDate'=>'2018-4-27 02-02-02',
        	'commentCount'=>48,
        	'viewCount'=>22,
        	'href'=>'nono',
        	'recommend'=>'true',
        	'original'=>'true',
        	'type'=>1,
        	'abstract'=>'iknow',
            'favorite'=>'true',
            'category'=>'KG',
        	'pageToken'=>'blog20180427'
        ]);

         DB::table('blogs')->insert([
        	'title'=>'TeaScript IDE编译器?',
        	'body'=>'IDE牛逼',
        	'author'=>'leon chen',
        	'authorId'=>'1',
        	'authorPortrait'=>'http://www.teascript.cn/image/leon.jpg',
        	'authorRelation'=>0,
        	'pubDate'=>'2018-4-27 02-02-02',
        	'commentCount'=>48,
        	'viewCount'=>22,
        	'href'=>'nono',
        	'recommend'=>'true',
        	'original'=>'true',
        	'type'=>2,
        	'abstract'=>'iknow',
            'favorite'=>'true',
            'category'=>'KG',
        ]);

         DB::table('blogs')->insert([
        	'title'=>'Tea3D?',
        	'body'=>'KG NoNO',
        	'author'=>'leon chen',
        	'authorId'=>'1',
        	'authorPortrait'=>'http://www.teascript.cn/image/leon.jpg',
        	'authorRelation'=>0,
        	'pubDate'=>'2018-4-27 02-02-02',
        	'commentCount'=>48,
        	'viewCount'=>22,
        	'href'=>'nono',
        	'recommend'=>'true',
        	'original'=>'true',
        	'type'=>2,
        	'abstract'=>'iknow',
            'favorite'=>'true',
            'category'=>'KG',
        ]);
    }
}
