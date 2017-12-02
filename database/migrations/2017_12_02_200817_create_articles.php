<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->string('name');
            $table->integer('number');
            $table->timestamps();
            $table->integer('gathering_id')->unsigned();
            $table->foreign('gathering_id')->references('id')
            ->on('gathering_centers')->onDelete('cascade');
            $table->increments('id');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
