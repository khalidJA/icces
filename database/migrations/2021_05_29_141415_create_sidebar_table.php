<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSidebarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sidebar', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('menus_id');
            $table->string('sub_contents_id');
            $table->string('order_content');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sidebar');
    }
}
