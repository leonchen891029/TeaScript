<?php

use Illuminate\Database\Seeder;

class QuestionTagsTestSeeder20180429 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('question_tags')->insert([
        	'content'=>'学习',
        	'question_id'=>1,
         ]);

         DB::table('question_tags')->insert([
        	'content'=>'语言',
        	'question_id'=>1,
         ]);


         DB::table('question_tags')->insert([
        	'content'=>'官方',
        	'question_id'=>1,
         ]);


         DB::table('question_tags')->insert([
        	'content'=>'陈老师',
        	'question_id'=>3,
         ]);

         DB::table('question_tags')->insert([
        	'content'=>'经验',
        	'question_id'=>3,
         ]);
    }
}
