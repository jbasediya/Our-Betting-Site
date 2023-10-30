<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBettings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bettings', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable();//this is for logo
            $table->string('name')->nullable();//this is for name
            $table->text('description')->nullable();//this is for description
            $table->string('bonus')->nullable();//this is for bonus
            $table->string('turnover')->nullable();//this is for turnover
            $table->string('min_odds')->nullable();//this is for minimum odds
            $table->string('slug')->nullable();//this is for slug
            $table->string('website_url')->nullable();//this is for Website Url
            $table->string('referral_url')->nullable();//this is for Referral Url
            $table->string('review')->nullable();//this is for Review
            $table->text('status')->nullable()->comment("1=>'active',1=>'deactive'");//this is for status 

            $table->string('features')->nullable()->comment('write content for football features');//this is for Foolball Features
          
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
        Schema::dropIfExists('bettings');
    }
}
