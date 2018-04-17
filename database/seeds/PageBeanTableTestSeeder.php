<?php

use Illuminate\Database\Seeder;

class PageBeanTableTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pagebeans')->insert([
        	'pageToken'=>'igferrari430zhouyyfchuanfaith',
        	'prevPageToken'=>'',
        	'nextPageToken'=>'',
        ]);
    }
}
