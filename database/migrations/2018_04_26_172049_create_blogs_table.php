<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('body');
            $table->string('author');
            $table->bigInteger('authorId');
            $table->string('authorPortrait');
            $table->integer('authorRelation');
            $table->string('pubDate');
            $table->integer('commentCount');
            $table->integer('viewCount');
            $table->string('href');
            $table->string('recommend');
            $table->string('original');
            $table->integer('type');
            $table->string('favorite');
            $table->string('abstract');
            $table->string('category');
            $table->string('pageToken')->nullable();
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
        Schema::dropIfExists('blogs');
    }
}
