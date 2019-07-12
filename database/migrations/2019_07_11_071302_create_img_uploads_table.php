<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImgUploadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('img_uploads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->BigInteger('catg_id')->unsigned();
            $table->foreign('catg_id')->references('id')->on('page_categories')->onUpdate('cascade')->onDelete('cascade');
            $table->string('title');
            $table->string('imagepath');
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
        Schema::dropIfExists('img_uploads');
    }
}
