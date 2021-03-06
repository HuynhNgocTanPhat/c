<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHoaDonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoa_don', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('MaHD');
            $table->bigInteger('id_MaKH')->unsigned();
            $table->integer('TongTien');
            $table->integer('TrangThai')->default(0);
            $table->timestamps();

            $table->foreign('id_MaKH')->references('id')->on('khach_hang')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hoa_don');
    }
}
