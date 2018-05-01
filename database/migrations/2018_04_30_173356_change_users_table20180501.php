<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeUsersTable20180501 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users',function($table){
              $table->string('location');
              $table->integer('fans');
              $table->integer('followers');
              $table->integer('score');
              $table->string('portrait');
              $table->string('joinTime');
              $table->string('gender');
              $table->string('devPlatform');
              $table->string('expertise');
              $table->integer('relation');
              $table->string('latestOnline');
              $table->string('from');
              $table->integer('favoriteCount');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
