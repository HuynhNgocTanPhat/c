<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoaiMonAnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loai_mon_an', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('MaLoaiMonAn');
            $table->string('TenLoaiMonAn');
            $table->boolean('TrangThai');
            $table->timestamps();

            // $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loai_mon_an');
    }
}
