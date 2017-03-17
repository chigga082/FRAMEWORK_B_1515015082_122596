<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_dosen_mk extends Model
{
    protected $table = 'tb_dosen_mk';
	protected $fillable = ['dosen_id','matakuliah_id'];
}
