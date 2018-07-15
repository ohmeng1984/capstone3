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
<<<<<<< HEAD
            $table->integer('user_id')->unsigned();
=======
            $table->integer('user_id');
>>>>>>> 1d9712a270dc9d8b9619543879fcb74a59a86676
            $table->string('body');
            $table->integer('commentable_id');
            $table->string('commentable_type');
            $table->timestamps();
<<<<<<< HEAD
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
=======
>>>>>>> 1d9712a270dc9d8b9619543879fcb74a59a86676
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
