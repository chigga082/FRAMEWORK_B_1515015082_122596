<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_ruangan extends Model
{
    protected $table = 'tb_ruangan';
	public function tb_jadwal_mk()
	{
		return $this->hasMany(tb_jadwal_mk::class);
		//untuk relasi antara tabel ruanga dan tabel 
		//jadwal matakuliah adalah one to many, oleh karena 
		//itu saya menggunakan has many sebagai relasi 2 tabel tersebut
	}
}
