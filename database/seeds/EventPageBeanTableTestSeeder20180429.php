<?php

use Illuminate\Database\Seeder;

class EventPageBeanTableTestSeeder20180429 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('event_page_beans')->insert([
        	'pageToken'=>'eventteascriptofficial2018',
        	'nextPageToken'=>'',
        	'prevPageToken'=>''
        ]);
    }
    
}
