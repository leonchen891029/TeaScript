<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeatimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teatimes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('author');
            $table->bigInteger('authorId');
            $table->text('body');
            $table->integer('appclient');
            $table->integer('commentCount');
            $table->string('pubDate');
            $table->string('imgSmall');
            $table->string('imgBig');
            $table->string('attach');
            $table->integer('likeCount');
            $table->integer('isLike');
            $table->string('imageFilePath');
            $table->string('audioPath');
            $table->integer('pageIndex');
            $table->integer('catalog');
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
        Schema::dropIfExists('teatimes');
    }
}
