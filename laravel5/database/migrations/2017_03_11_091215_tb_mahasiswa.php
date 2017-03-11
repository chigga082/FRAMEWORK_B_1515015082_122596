<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TbMahasiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_mhs', function (Blueprint $table) {
            $table->increments('id',10);
			$table->string('nama',50);
			$table->string('nip',18);
			$table->text('alamat');
			$table->integer('pengguna_id',false,true);
			$table->foreign('pengguna_id')->references('id')->on('pengguna')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::drop('tb_mhs');
    }
}
