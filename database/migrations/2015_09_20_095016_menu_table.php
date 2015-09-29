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
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('url');
            $table->string('image');
            $table->string('class');
            $table->string('html_id');            
            $table->string('model');
            $table->string('type', 60);
            $table->integer('status');
            $table->timestamps();
        });

        Schema::create('menu_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('menu_id');
            $table->string('language_code');
            $table->string('name');
            $table->string('title');
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
        Schema::drop('menus');
        Schema::drop('menu_translations');
    }
}
