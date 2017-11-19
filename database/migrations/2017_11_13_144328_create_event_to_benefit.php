<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventToBenefit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events_to_benefit', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->integer('time');
            $table->string('address');
            $table->string('description_event');
            $table->integer('volunteers_number');
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
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('events_to_benefit');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
