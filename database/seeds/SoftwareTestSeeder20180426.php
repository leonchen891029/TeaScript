<?php

use Illuminate\Database\Seeder;

class SoftwareTestSeeder20180426 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('softwares')->insert([
        	'name'=>'TeaScript IDE',
        	'href'=>'http://www.teascript.cn/ide.php',
        ]);
    }
}
