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
            $table->integer('action_user_id')
                  ->unsigned();
            $table->foreign('action_user_id')
            ->references('id')
            ->on('users');

            $table->integer('action_rnv_id')
                  ->unsigned();
            $table->foreign('action_rnv_id')
            ->references('id')
            ->on('rnv');
            $table->integer('action_record_id')
                  ->unsigned();
            $table->foreign('action_record_id')
            ->references('id')
            ->on('action_record');


            $table->string('name');
            $table->string('description');
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
        Schema::dropIfExists('action');
    }
}
