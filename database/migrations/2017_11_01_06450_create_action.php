<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAction extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
             $table->integer('catastrophe_id')
            ->unsigned();
            $table->foreign('catastrophe_id')
            ->references('id')
            ->on('catastrophes')
            ->onDelete('cascade');

            /* 
            $table->integer('province_id')
            ->unsigned();
            $table->foreign('province_id')
            ->references('id')
            ->on('provinces')
            ->onDelete('cascade');
            */
            //Polimorfismos
            // Voluntariado:
            $table->morphs('action');
            


            
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
        //DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('actions');

        //DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
