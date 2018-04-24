<?php

use Illuminate\Database\Seeder;

class BannersTableTestSeeder20180424 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banners')->insert([
        	'name'=>'TeaScript',
        	'detail'=>'TeaScript 全新动态语言',
        	'img'=>'www.teascript.cn/image/teascript.png',
        	'href'=>'www.teascript.cn/teascript.php',
        	'pubDate'=>'2018-4-24 05-15-00',
        	'type'=>'1',
        	'pageToken'=>'alliancelodaakke',
        ]);

        DB::table('banners')->insert([
        	'name'=>'TVM',
        	'detail'=>'TVM 全新虚拟机',
        	'img'=>'www.teascript.cn/image/tvm.png',
        	'href'=>'www.teascript.cn/tvm.php',
        	'pubDate'=>'2018-4-24 05-20-00',
        	'type'=>'1',
        	'pageToken'=>'alliancelodaakke',
        ]);

        DB::table('banners')->insert([
        	'name'=>'TeaScript IDE',
        	'detail'=>'TeaScript IDE',
        	'img'=>'www.teascript.cn/image/ide.png',
        	'href'=>'www.teascript.cn/ide.php',
        	'pubDate'=>'2018-4-24 05-25-00',
        	'type'=>'1',
        	'pageToken'=>'alliancelodaakke',
        ]);

    }
}
