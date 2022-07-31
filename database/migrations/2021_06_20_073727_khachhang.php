<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Khachhang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khachhang', function (Blueprint $khachhang) {
            $khachhang->increments('idKhachHang');
            $khachhang->string('nameKhachHang', 100);
            $khachhang->string('email', 100);
            $khachhang->string('passWord', 50);
            $khachhang->char('sdt', 10);
            $khachhang->text('diaChi');
            $khachhang->boolean('gioiTinh')->nullable();
            $khachhang->text('anh')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('khachhang');
    }
}
