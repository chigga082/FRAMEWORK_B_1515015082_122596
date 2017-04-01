<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_dosen_mk extends Model
{
    protected $table = 'tb_dosen_mk';
	public function tb_dosen()
	{
		return $this->belongsTo(tb_dosen::class);
//		relasi untuk tabel dosen matakuliah dan dosen adalah
//		many to one, belongsTo digunakan karena tabel dosen matakuliah memiliki foreign key
//		terhadap primary key pada tabel dosen
	}
	public function tb_mk()
	{
		return $this->belongsTo(tb_mk::class);
//		relasi untuk tabel dosen matakuliah dan matakuliah adalah
//		many to one, belongsTo digunakan karena tabel dosen matakuliah memiliki foreign key
//		terhadap primary key pada tabel matakuliah
	}
	public function tb_jadwal_mk()
	{
		return $this->hasMany(tb_jadwal_mk::class);
//		relasi untuk tabel jadwal dosen matakuliah dan jadwal matakuliah adalah
//		one to many, hasMany digunakan karena dosen matakuliah dapat memiliki 
//		lebih dari satu jadwal matakuliah
	}
}
