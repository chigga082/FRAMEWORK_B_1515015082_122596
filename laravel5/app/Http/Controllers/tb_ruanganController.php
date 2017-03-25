<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\tb_ruangan;

class tb_ruanganController extends Controller
{
    public function awal()
	{
		return view('tb_ruangan.awal',['data'=>tb_ruangan::all()]);;
	}
	public function tambah()
	{
		return view('tb_ruangan.tambah');
	}
	public function simpan(Request $input)
	{
		$tb_ruangan = new tb_ruangan();
		$tb_ruangan->title = $input->title;
		$informasi=$tb_ruangan->save() ? 'Berhasil simpan data' : 'gagal simpan data';
		return redirect('tb_ruangan')->with(['informasi'=>$informasi]);
	}
	public function edit($id)
	{
		$tb_ruangan = tb_ruangan::find($id);
		return view('tb_ruangan.edit')->with(array('tb_ruangan'=>$tb_ruangan));
	}
	public function lihat($id)
	{
		$tb_ruangan = tb_ruangan::find($id);
		return view('tb_ruangan.lihat')->with(array('tb_ruangan'=>$tb_ruangan));
	}
	public function update($id, Request $input)
	{
		$tb_ruangan = tb_ruangan::find($id);
		$tb_ruangan->title = $input->title;
		$informasi=$tb_ruangan->save() ? 'Berhasil update data' : 'gagal update data';
		return redirect('tb_ruangan')->with(['informasi'=>$informasi]);
	}
	public function hapus($id)
	{
		$tb_ruangan = tb_ruangan::find($id);
		$informasi=$tb_ruangan->delete() ? 'Berhasil hapus data' : 'gagal hapus data';
		return redirect('tb_ruangan')->with(['informasi'=>$informasi]);
	}
}
