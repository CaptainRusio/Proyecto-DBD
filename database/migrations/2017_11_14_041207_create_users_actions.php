<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersActions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_actions', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();


            $table->integer('users_id')
            ->unsigned();
            $table->foreign('users_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');


            $table->integer('actions_id')
            ->unsigned();
            $table->foreign('actions_id')
            ->references('id')
            ->on('actions')
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
        Schema::dropIfExists('users_actions');
        //DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
