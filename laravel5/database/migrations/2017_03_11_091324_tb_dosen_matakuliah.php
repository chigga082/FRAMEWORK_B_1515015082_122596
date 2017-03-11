<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TbDosenMatakuliah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_dosen_mk', function (Blueprint $table) {
            $table->increments('id',10);
			$table->integer('dosen_id',false,true);
			$table->foreign('dosen_id')->references('id')->on('tb_dosen')->onUpdate('cascade')->onDelete('cascade');
			$table->integer('matakuliah_id',false,true);
			$table->foreign('matakuliah_id')->references('id')->on('tb_mk')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::drop('tb_dosen_mk');
    }
}
