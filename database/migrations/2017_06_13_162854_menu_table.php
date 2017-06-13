<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu', function (Blueprint $table) {
        $table->increments('id');
       
        $table->string('salads');
        $table->string('coldSandwiches');
        $table->string('hotSandwiches');
        $table->string('breakfast');
        $table->string('sides');
        $table->string('soup');
        $table->string('desserts');
        $table->string('drnks'); 
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
         Schema::drop('menu');
    }
}
