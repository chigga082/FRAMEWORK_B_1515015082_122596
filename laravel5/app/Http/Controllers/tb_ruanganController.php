<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\tb_ruangan;

class tb_ruanganController extends Controller
{
    public function awal()
	{
		return "Hello Hooligans ruangan";
	}
	public function tambah()
	{
		return $this->simpan();
	}
	public function simpan()
	{
		$tb_ruangan = new tb_ruangan();
		$tb_ruangan->title = '404';
		$tb_ruangan->save();
		return "data dengan nilai {$tb_ruangan->title} telah disimpan";
	}
}
