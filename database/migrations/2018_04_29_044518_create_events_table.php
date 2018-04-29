<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('applyCount');
            $table->integer('status');
            $table->integer('type');
            $table->string('title');
            $table->text('body');
            $table->string('img');
            $table->string('startDate');
            $table->string('endDate');
            $table->string('pubDate');
            $table->string('href');
            $table->string('author');
            $table->bigInteger('authorId');
            $table->string('authorPortrait');
            $table->integer('commentCount');
            $table->integer('viewCount');
            $table->string('spot');
            $table->string('location');
            $table->string('city');
            $table->string('costDesc');
            $table->string('favorite');
            $table->integer('applyStatus');
            $table->string('pageToken');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
