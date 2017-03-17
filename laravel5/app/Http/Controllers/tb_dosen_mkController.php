<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\tb_dosen_mk;

class tb_dosen_mkController extends Controller
{
    public function awal()
	{
		return "Hello Hooligans dosen matakuliah";
	}
	public function tambah()
	{
		return $this->simpan();
	}
	public function simpan()
	{
		$tb_dosen_mk = new tb_dosen_mk();
		$tb_dosen_mk->dosen_id = '1';
		$tb_dosen_mk->matakuliah_id = '1';
		$tb_dosen_mk->save();
		return "data dengan id dosen {$tb_dosen_mk->dosen_id} telah disimpan";
	}
}
