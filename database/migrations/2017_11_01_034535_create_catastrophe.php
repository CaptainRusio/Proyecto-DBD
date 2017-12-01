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
            $table->string('description');
            $table->string('type');
            $table->boolean('confirmed')->default(false);
            $table->timestamps();

            $table->integer('commune_id')
            ->unsigned();
            $table->foreign('commune_id')
            ->references('id')
            ->on('communes')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('catastrophes');
        //DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
