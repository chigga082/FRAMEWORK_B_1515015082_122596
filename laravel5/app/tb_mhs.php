<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_mhs extends Model
{
    protected $table = 'tb_mhs';
	protected $fillable = ['nama','nim','alamat','pengguna_id'];
}
