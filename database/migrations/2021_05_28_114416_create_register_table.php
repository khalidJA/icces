<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRegisterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name');
            $table->string('email');
            $table->string('country');
            $table->string('work_place');
            $table->string('phone');
            $table->string('gender');
            $table->string('certi');
            $table->string('image');
            $table->string('file');
            $table->string('title');
            $table->string('abstract');
            $table->string('is_attenders');
            $table->string('is_reviewers');
            $table->string('is_author');
            $table->string('active_code');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('register');
    }
}
