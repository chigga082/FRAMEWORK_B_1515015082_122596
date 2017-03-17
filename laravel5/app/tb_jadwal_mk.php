<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_jadwal_mk extends Model
{
    protected $table = 'tb_jadwal_mk';
	protected $fillable = ['mahasiswa_id','ruangan_id','dosen_matakuliah_id'];
}
