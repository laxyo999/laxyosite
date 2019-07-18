<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountryStateCityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('country_mast', function (Blueprint $table) {
            $table->Increments('country_code');
            $table->string('country_name');
            $table->string('iso2');
            $table->string('iso3');
            $table->string('phone_code');
            $table->timestamps();
        });

        Schema::create('state_mast', function (Blueprint $table) {
            $table->increments('state_code');
            $table->string('state_name');
            $table->integer('country_code');            
            $table->timestamps();
             });

        Schema::create('city_mast', function (Blueprint $table) {
            $table->increments('city_code');
            $table->string('city_name');
            $table->integer('state_code');            
            $table->integer('country_code');            
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
        Schema::dropIfExists('country_state_city');
    }
}
