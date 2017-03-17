<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\pengguna;

class PenggunaController extends Controller
{
    public function awal()
	{
		return "Hello Hooligans";
	}
	public function tambah()
	{
		return $this->simpan();
	}
	public function simpan()
	{
		$pengguna = new pengguna();
		$pengguna->username = 'Chrisman Bonor Sinaga';
		$pengguna->password = '1515015082';
		$pengguna->save();
		return "data dengan username {$pengguna->username} telah disimpan";
	}
}
