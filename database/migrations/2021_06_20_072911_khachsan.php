<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Khachsan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khachsan', function (Blueprint $khachsan) {
            $khachsan->increments('idKhachSan');
            $khachsan->string('nameKhachSan', 100);
            $khachsan->text('mieuTa');
            $khachsan->text('anh');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('khachsan');
    }
}
