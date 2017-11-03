<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
           $table->string('email')->unique();
            $table->string('password');
            $table->integer('record_id')->unsigned();
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('record_id')
                  ->references('id')
                  ->on('user_record');

            $table->integer('rnv_id')
            ->unsigned();
            $table->foreign('rnv_id')
            ->references('id')
            ->on('rnv');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
