<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\tb_jadwal_mk;

class tb_jadwal_mkController extends Controller
{
    public function awal()
	{
		return "Hello Hooligans jadwal matakuliah";
	}
	public function tambah()
	{
		return $this->simpan();
	}
	public function simpan()
	{
		$tb_jadwal_mk = new tb_jadwal_mk();
		$tb_jadwal_mk->mahasiswa_id = '1';
		$tb_jadwal_mk->ruangan_id = '1';
		$tb_jadwal_mk->dosen_matakuliah_id = '1';
		$tb_jadwal_mk->save();
		return "jadwal dengan id dosen {$tb_jadwal_mk->dosen_matakuliah_id} telah disimpan";
	}
}
