<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountryBettings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('country_bettings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('country_id')->nullable();
            $table->unsignedBigInteger('betting_id')->nullable();
            $table->timestamps();
           
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');//this is for country id for country table
            $table->foreign('betting_id')->references('id')->on('bettings')->onDelete('cascade');//this is for betting id for the betting table 

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('country_bettings');
    }
}
