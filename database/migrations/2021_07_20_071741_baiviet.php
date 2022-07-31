<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Baiviet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baiviet', function (Blueprint $baiviet) {
            $baiviet->increments('idBaiViet');
            $baiviet->text('tieuDe');
            $baiviet->text('tomTat');
            $baiviet->text('noiDung');
            $baiviet->text('anh');
            $baiviet->date('ngayDang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('baiviet');
    }
}
