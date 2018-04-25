<?php

use Illuminate\Database\Seeder;

class AboutTestSeeder20180426 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
        	'title'=>'JavaScript',
        	'commentCount'=>11,
        	'type'=>0,
        	'viewCount'=>110,
        	'news_id'=>1,
        ]);

         DB::table('abouts')->insert([
        	'title'=>'U3D',
        	'commentCount'=>23,
        	'type'=>0,
        	'viewCount'=>22,
        	'news_id'=>1,
        ]);

        DB::table('abouts')->insert([
        	'title'=>'TheOne',
        	'commentCount'=>3,
        	'type'=>0,
        	'viewCount'=>0,
        	'news_id'=>1,
        ]);

         DB::table('abouts')->insert([
        	'title'=>'TVM_1',
        	'commentCount'=>6,
        	'type'=>0,
        	'viewCount'=>0,
        	'news_id'=>2,
        ]);

         DB::table('abouts')->insert([
        	'title'=>'TVM_2',
        	'commentCount'=>7,
        	'type'=>0,
        	'viewCount'=>0,
        	'news_id'=>2,
        ]);
    }
}
