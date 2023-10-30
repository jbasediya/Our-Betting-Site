<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeatures extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('features', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('betting_id')->nullable();
            $table->text('description')->nullable();//this is for description
            $table->text('status')->nullable()->comment("0=>'minus',1=>'plus'");//this is for status 
            $table->foreign('betting_id')->references('id')->on('bettings')->onDelete('cascade');//this is for country 
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
        Schema::dropIfExists('features');
    }
}
