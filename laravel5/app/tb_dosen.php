<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_dosen extends Model
{
    protected $table = 'tb_dosen';
	protected $fillable = ['nama','nip','alamat','pengguna_id'];
}
