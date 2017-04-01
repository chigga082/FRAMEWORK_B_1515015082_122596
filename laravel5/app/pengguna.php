<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
    protected $table = 'pengguna';
	
	public function tb_dosen()
	{
		return $this->hasOne(tb_dosen::class);
//		relasi untuk tabel dosen dan pengguna adalah
//		one to one, belongsTo digunakan karena tabel dosen memiliki foreign key
//		terhadap primary key pada tabel pengguna
	}
	public function tb_mhs()
	{
		return $this->hasOne(tb_mhs::class);
//		relasi untuk tabel mahasiswa dan pengguna adalah
//		one to one, belongsTo digunakan karena tabel mahasiswa memiliki foreign key
//		terhadap primary key pada tabel pengguna
	}
	public function peran()
	{
		return $this->belongsToMany(peran::class);
	}
}