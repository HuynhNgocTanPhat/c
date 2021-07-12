<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChiTietHoaDonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chi_tiet_hoa_don', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_MaHD')->unsigned();
            $table->bigInteger('id_MaMonAn')->unsigned();
            $table->bigInteger('id_MaBan')->unsigned();
            $table->bigInteger('id_MaNV')->unsigned();
            $table->integer('DonGia');
            $table->integer('SoLuong');
            $table->integer('TongTien');
            $table->integer('TrangThai')->default(0);
            $table->timestamps();

            $table->foreign('id_MaHD')->references('id')->on('hoa_don')->onDelete('cascade');
            $table->foreign('id_MaMonAn')->references('id')->on('mon_an')->onDelete('cascade');
            $table->foreign('id_MaBan')->references('id')->on('ban_an')->onDelete('cascade');
            $table->foreign('id_MaNV')->references('id')->on('nhan_vien')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chi_tiet_hoa_don');
    }
}
