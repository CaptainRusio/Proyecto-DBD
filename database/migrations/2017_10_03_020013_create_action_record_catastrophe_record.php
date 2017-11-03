<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActionRecordCatastropheRecord extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('action_record_catastrophe_record', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->integer('action_record_id')
            ->unsigned();
            $table->foreign('action_record_id')
            ->references('id')
            ->on('action_record');

            $table->integer('catastrophe_record_id')
            ->unsigned();
            $table->foreign('catastrophe_record_id')
            ->references('id')
            ->on('catastrophe_record');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('action_record_catastrophe_record');
    }
}
