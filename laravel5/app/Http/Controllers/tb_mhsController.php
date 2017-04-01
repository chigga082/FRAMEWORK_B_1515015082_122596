<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\tb_mhs;
use App\pengguna;

class tb_mhsController extends Controller
{
	public function tb_mhs(){
	$tb_mhs = tb_mhs::all();

	//dd($tb_mhs);
	foreach($tb_mhs as $mhs){
	echo"Nama: ".$mhs->nama;
	echo"<br>";
	echo"Username: ".$mhs->pengguna->username;
	echo"<br>";
	}
	}
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
