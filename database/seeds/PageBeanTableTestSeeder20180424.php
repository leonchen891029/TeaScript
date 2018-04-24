<?php

use Illuminate\Database\Seeder;

class PageBeanTableTestSeeder20180424 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('pagebeans')->insert([
        	'pageToken'=>'alliancelodaakke',
        	'prevPageToken'=>'',
        	'nextPageToken'=>'',
        ]);
    }
}
