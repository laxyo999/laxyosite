<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateUser1Table extends Migration
{
    public function boot()
{
    // Add the following line
    Schema::defaultStringLength(191);
}
    public function up()
    {
          Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email', 100)->unique();
            $table->string('address')->nullable();
            $table->string('city');
            $table->string('pin');
            $table->string('state');
            $table->string('country');
            $table->string('contact');
            $table->string('mobile');
            $table->text('comment');
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
        Schema::dropIfExists('user1');
    }
}
