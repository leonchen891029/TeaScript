<?php

use Illuminate\Database\Seeder;

use Hash;

class UsersTableTestSeeder20180501 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	"name"=>"leon chen",
        	"location"=>"上海",
        	"fans"=>99,
        	"followers"=>0,
        	"score"=>99,
        	"portrait"=>"http://www.teascript.cn/image/leon.jpg",
        	"joinTime"=>"2018-05-01 00:00:00",
        	"gender"=>"男",
        	"devPlatform"=>"Android",
        	"expertise"=>"Java",
        	"relation"=>1,
        	"latestOnline"=>"2018-04-11 16:16:00",
        	"from"=>"闵行",
        	"favoriteCount"=>99,
        	"email"=>"leonchen891029@163.com",
        	"password"=>Hash::make("leonbaby891029")
        ]);

    }
}
