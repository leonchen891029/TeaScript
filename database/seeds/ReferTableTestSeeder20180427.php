<?php

use Illuminate\Database\Seeder;

class ReferTableTestSeeder20180427 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           DB::table('refers')->insert([
        	'author'=>'leon chen',
        	'content'=>'参考一下',
        	'pubDate'=>'2018-4-27 02-02-02',
        	'refer_id'=>1,
        	'comment_id'=>1,
           ]);

           DB::table('refers')->insert([
        	'author'=>'boobo',
        	'content'=>'666',
        	'pubDate'=>'2018-4-21 23-02-02',
        	'refer_id'=>1,
        	'comment_id'=>1,
           ]);
    }
}
