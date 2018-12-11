<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagepageInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagepage_info', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('info_id')->unsigned();
            $table->integer('imagepage_id')->unsigned();
            $table->foreign('info_id')->references('id')->on('infos');
            $table->foreign('imagepage_id')->references('id')->on('imagepages');
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
        Schema::dropIfExists('imagepage_info');
    }
}
