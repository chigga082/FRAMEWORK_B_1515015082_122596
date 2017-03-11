<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TbJadwalMatakuliah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_jadwal_mk', function (Blueprint $table) {
            $table->increments('id',10);
			$table->integer('mahasiswa_id',false,true);
			$table->foreign('mahasiswa_id')->references('id')->on('tb_mhs')->onUpdate('cascade')->onDelete('cascade');
			$table->integer('ruangan_id',false,true);
			$table->foreign('ruangan_id')->references('id')->on('tb_ruangan')->onUpdate('cascade')->onDelete('cascade');
			$table->integer('dosen_matakuliah_id',false,true);
			$table->foreign('dosen_matakuliah_id')->references('id')->on('tb_dosen_mk')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::drop('tb_jadwal_mk');
    }
}
