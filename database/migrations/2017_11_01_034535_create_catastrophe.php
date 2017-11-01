<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatastrophe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catastrophes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
            $table->integer('catastrophe_record_id')
            ->unsigned();
            $table->foreign('catastrophe_record_id')
            ->references('id')
            ->on('catastrophe_record');

            $table->integer('commune_id')
            ->unsigned();
            $table->foreign('commune_id')
            ->references('id')
            ->on('communes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('catastrophe');
    }
}
