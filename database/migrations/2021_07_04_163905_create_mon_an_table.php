<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonAnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mon_an', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('MaMonAn');
            $table->string('TenMonAn');
            $table->integer('DonGia');
            $table->bigInteger('id_MaLoai')->unsigned();
            $table->integer('TrangThai')->default(0);
            $table->timestamps();

            $table->foreign('id_MaLoai')->references('id')->on('loai_mon_an')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mon_an');
    }
}
