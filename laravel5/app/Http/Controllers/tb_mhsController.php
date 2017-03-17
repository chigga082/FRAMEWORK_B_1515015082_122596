<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\tb_mhs;

class tb_mhsController extends Controller
{
    public function awal()
	{
		return "Hello Hooligans mahasiswa";
	}
	public function tambah()
	{
		return $this->simpan();
	}
	public function simpan()
	{
		$tb_mhs = new tb_mhs();
		$tb_mhs->nama = 'Chrisman Bonor Sinaga';
		$tb_mhs->nim = '1515015082';
		$tb_mhs->alamat = 'jalan perjuangan';
		$tb_mhs->pengguna_id = '1';
		$tb_mhs->save();
		return "data dengan nama {$tb_mhs->nama} telah disimpan";
	}
}
