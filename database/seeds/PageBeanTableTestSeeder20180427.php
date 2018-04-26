<?php

use Illuminate\Database\Seeder;

class PageBeanTableTestSeeder20180427 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pagebeans')->insert([
        	'pageToken'=>'blognormaldefault',
        	'prevPageToken'=>'',
        	'nextPageToken'=>'',
        ]);

        DB::table('pagebeans')->insert([
        	'pageToken'=>'blogheat',
        	'prevPageToken'=>'',
        	'nextPageToken'=>'',
        ]);
    }
}
