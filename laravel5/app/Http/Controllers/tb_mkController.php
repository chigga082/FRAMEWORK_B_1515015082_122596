<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\tb_mk;

class tb_mkController extends Controller
{
    public function awal()
	{
		return "Hello Hooligans matakuliah";
	}
	public function tambah()
	{
		return $this->simpan();
	}
	public function simpan()
	{
		$tb_mk = new tb_mk();
		$tb_mk->title = 'Visual';
		$tb_mk->keterangan = 'matakuliah wajib';
		$tb_mk->save();
		return "data dengan nilai {$tb_mk->title} telah disimpan";
	}
}
