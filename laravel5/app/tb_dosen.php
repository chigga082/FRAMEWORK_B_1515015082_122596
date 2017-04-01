<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_dosen extends Model
{
    protected $table = 'tb_dosen';
	
	public function pengguna()
	{
		return $this->belongsTo(pengguna::class);
//		relasi untuk tabel dosen dan pengguna adalah
//		one to one, belongsTo digunakan karena tabel dosen memiliki foreign key
//		terhadap primary key pada tabel pengguna
	}
	public function tb_dosen_mk()
	{
		return $this->hasMany(tb_dosen_mk::class);
//		relasi untuk tabel dosen dan dosen matakuliah adalah
//		one to many, hasMany digunakan karena satu dosen dapat memiliki 
//		lebih dari satu dosen matakuliah
	}

}
