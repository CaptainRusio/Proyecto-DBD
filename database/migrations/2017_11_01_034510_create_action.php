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



            //llaves foráneas
            $table->integer('action_user_id')
                  ->unsigned();
            $table->foreign('action_user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');

            $table->integer('action_rnv_id')
                  ->unsigned();
            $table->foreign('action_rnv_id')
            ->references('id')
            ->on('rnv')
            ->onDelete('cascade');

            //Polimorfismos
            // Voluntariado:
            $table->morphs('polyAction');



            
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
