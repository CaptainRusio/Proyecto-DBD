<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonationCampaign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donation_campaigns', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('goal');
            $table->integer('actual_amount');
            $table->date('start');
            $table->date('end');
            $table->integer('cost');
            $table->integer('progress');
            $table->integer('anonymous_donation');
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
        Schema::dropIfExists('donation_campaigns');
    }
}
