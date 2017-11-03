<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserActionRecord extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_action_record', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->integer('users_id')
            ->unsigned();
            $table->foreign('users_id')
            ->references('id')
            ->on('users');


            $table->integer('action_record_id')
            ->unsigned();
            $table->foreign('action_record_id')
            ->references('id')
            ->on('action_record');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_action_record');
    }
}
