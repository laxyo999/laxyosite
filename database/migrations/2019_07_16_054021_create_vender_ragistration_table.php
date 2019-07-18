<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVenderRagistrationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vender_ragistration', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company_name');
            $table->string('company_website');
            $table->string('person_name');
            $table->string('designation');
            $table->string('email');
            $table->string('postal_address');
            $table->string('telephone_no');
            $table->string('mobile_no');
            $table->string('fax');
            $table->string('nature_business');
            $table->string('products');
            $table->string('customers');
            $table->string('pan');
            $table->string('tan');
            $table->string('tin');
            $table->string('ssi_reg_no');
            $table->string('excise_no');
            $table->string('service_tax_no');
            $table->timestamps();
        });
        Schema::create('nature_business', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nature_bussi_name');
            $table->timestamps();
        });
        Schema::create('product', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('product_name');
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
        Schema::dropIfExists('vender_ragistration');
    }
}
