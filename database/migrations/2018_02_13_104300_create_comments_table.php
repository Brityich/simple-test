<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_author');
            $table->unsignedInteger('id_post');
            $table->longText('text');
            $table->timestamps();

<<<<<<< HEAD
            $table->foreign('id_author')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_post')->references('id')->on('posts')->onDelete('cascade');
=======
            $table->foreign('id_author')->references('id')->on('users');
            $table->foreign('id_post')->references('id')->on('news');
>>>>>>> 858eacacc407897566ea1558eb07b077dcf5fc0e
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
