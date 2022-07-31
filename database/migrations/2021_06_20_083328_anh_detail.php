<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AnhDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anh_detail', function (Blueprint $anh_detail) {
            $anh_detail->increments('idAnh');
            $anh_detail->unsignedInteger('idTour');
            $anh_detail->text('anh');
            $anh_detail->foreign('idTour')->references('idTour')->on('tour');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('anh_detail');
    }
}
