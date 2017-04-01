<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_jadwal_mk extends Model
{
    protected $table = 'tb_jadwal_mk';
	public function tb_dosen_mk()
	{
		return $this->belongsTo(tb_dosen_mk::class);
//		relasi untuk tabel jadwal matakuliah dan dosen matakuliah adalah
//		many to one, belongsTo digunakan karena tabel jadwal matakuliah memiliki foreign key
//		terhadap primary key pada tabel dosen matakuliah
	}
	public function tb_mhs()
	{
		return $this->belongsTo(tb_mhs::class);
//		relasi untuk tabel jadwal matakuliah dan mahasiswa adalah
//		many to one, belongsTo digunakan karena tabel jadwal matakuliah memiliki foreign key
//		terhadap primary key pada tabel mahasiswa
	}
	public function tb_ruangan()
	{
		return $this->belongsTo(tb_ruangan::class);
//		relasi untuk tabel jadwal matakuliah dan ruangan adalah
//		many to one, belongsTo digunakan karena tabel jadwal matakuliah memiliki foreign key
//		terhadap primary key pada tabel ruangan
	}
}
