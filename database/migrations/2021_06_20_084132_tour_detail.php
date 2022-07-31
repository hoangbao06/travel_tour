<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TourDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_detail', function (Blueprint $tour_detail) {
            $tour_detail->unsignedInteger('idTour');
            $tour_detail->string('diemXuatPhat', 100);
            $tour_detail->string('diemDen', 100);
            $tour_detail->time('gioBatDau');
            $tour_detail->time('gioDen');
            $tour_detail->integer('Ngay');
            $tour_detail->text('ghiChu');
            $tour_detail->text('anh');
            $tour_detail->foreign('idTour')->references('idTour')->on('tour');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tour_detail');
    }
}
