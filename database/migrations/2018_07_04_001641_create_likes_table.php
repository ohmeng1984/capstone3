<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('likes', function (Blueprint $table) {
            $table->increments('id');
<<<<<<< HEAD
            $table->integer('user_id')->nullable();
=======
            $table->integer('user_id');
>>>>>>> 1d9712a270dc9d8b9619543879fcb74a59a86676
            $table->integer('likable_id');
            $table->string('likable_type');
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
        Schema::dropIfExists('likes');
    }
}
