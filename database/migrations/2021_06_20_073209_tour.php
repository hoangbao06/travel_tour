<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tour extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour', function (Blueprint $tour) {
            $tour->increments('idTour');
            $tour->string('nameTour', 100);
            $tour->text('tieuDe');
            $tour->text('anhTour');
            $tour->string('diemXuatPhat', 100);
            $tour->string('diemDen', 100);
            $tour->date('ngayKhoiHanh');
            $tour->date('ngayKetThuc');
            $tour->integer('soLuongNguoi');
            $tour->integer('giaNguoiLon');
            $tour->integer('giaTreEm');
            $tour->text('gioiThieu');
            $tour->tinyInteger('trangThai');
            $tour->unsignedInteger('idMayBay');
            $tour->unsignedInteger('idKhachSan');
            $tour->foreign('idMayBay')->references('idMayBay')->on('maybay');
            $tour->foreign('idKhachSan')->references('idKhachSan')->on('khachsan');
            // $tour->unsignedInteger('idNhanVien');
            // $tour->foreign('idNhanVien')->references('idNhanVien')->on('nhanvien');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tour');
    }
}
