<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNhanVienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhan_vien', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('MaNV');
            $table->string('TenNhanVien');
            $table->string('GioiTinh');
            $table->string('Email');
            $table->string('DiaChi');
            $table->date('NgaySinh');
            $table->integer('SDT');
            $table->string('TenTaiKhoan');
            $table->char('MatKhau');
            $table->string('Avatar');
            $table->integer('QuanLy')->default(0);
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
        Schema::dropIfExists('nhan_vien');
    }
}
