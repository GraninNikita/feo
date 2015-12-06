<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {

            /*Движок, на случай полнотекстового поиска*/
            $table->engine = 'MyISAM';

            /*url of news*/
            $table->string("url");

            /*header of our news*/
            $table->string("header");

            /*url of picture*/
            $table->string("picture");

            $table->text("text");

            $table->increments('id');
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
        Schema::drop('news');
    }
}
