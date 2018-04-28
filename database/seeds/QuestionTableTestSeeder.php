<?php

use Illuminate\Database\Seeder;

class QuestionTableTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('question_page_beans')->insert([
        	'pageToken'='igferrari430yyf',
        	'nextPageToken'='',
        	'prevPageToken'=''
        ]);

        DB::table('question_page_beans')->insert([
        	'pageToken'='question_page_token_default',
        	'nextPageToken'='',
        	'prevPageToken'=''
        ]);


    }
}
