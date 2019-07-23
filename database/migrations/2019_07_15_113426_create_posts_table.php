<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id',11);
            $table->string('jobtitle');
            $table->string('location');
            $table->text('description');
            $table->string('experience');
            $table->string('resume');
            $table->string('salaryfrom');
            $table->string('salaryto');
            $table->string('closingdate');
            $table->string('candidatecount',2);
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
        Schema::dropIfExists('posts');
    }
}
