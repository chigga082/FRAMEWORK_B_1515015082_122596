<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_mhs extends Model
{
    protected $table = 'tb_mhs';
	
	public function pengguna()
	{
		return $this->belongsTo(pengguna::class);
//		relasi untuk tabel jadwal mahasiswa dan pengguna adalah
//		one to one, belongsTo digunakan karena tabel mahasiswa memiliki foreign key
//		terhadap primary key pada tabel pengguna
	}
	public function tb_jadwal_mk()
	{
		return $this->hasMany(tb_jadwal_mk::class);
//		relasi untuk tabel mahasiswa dan jadwal matakuliah adalah
//		one to many, hasMany digunakan karena mahasiswa dapat memiliki 
//		lebih dari satu jadwal matakuliah
	}
}
