<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\tb_dosen;

class tb_dosenController extends Controller
{
    public function awal()
	{
		return "Hello Hooligans Dosen";
	}
	public function tambah()
	{
		return $this->simpan();
	}
	public function simpan()
	{
		$tb_dosen = new tb_dosen();
		$tb_dosen->nama = 'Chrisman Bonor Sinaga';
		$tb_dosen->nip = '1515015082';
		$tb_dosen->alamat = 'jalan perjuangan';
		$tb_dosen->pengguna_id = '1';
		$tb_dosen->save();
		return "data dengan nama {$tb_dosen->nama} telah disimpan";
	}
}
