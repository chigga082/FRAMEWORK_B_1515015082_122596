<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_mk extends Model
{
    protected $table = 'tb_mk';
	public function tb_dosen_mk()
	{
		return $this->hasMany(tb_dosen_mk::class); 
		//untuk relasi antara tabel matakuliah dan tabel 
		//dosen matakuliah adalah one to many, oleh karena 
		//itu saya menggunakan has many untuk relesi tersebut
	}
}
