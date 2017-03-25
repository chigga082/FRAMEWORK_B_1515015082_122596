<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\tb_mk;

class tb_mkController extends Controller
{
    public function awal()
	{
		return view('tb_mk.awal',['data'=>tb_mk::all()]);;
	}
	public function tambah()
	{
		return view('tb_mk.tambah');
	}
	public function simpan(Request $input)
	{
		$tb_mk = new tb_mk();
		$tb_mk->title = $input->title;
		$tb_mk->keterangan = $input->keterangan;
		$informasi=$tb_mk->save() ? 'Berhasil simpan data' : 'gagal simpan data';
		return redirect('tb_mk')->with(['informasi'=>$informasi]);
	}
	public function edit($id)
	{
		$tb_mk = tb_mk::find($id);
		return view('tb_mk.edit')->with(array('tb_mk'=>$tb_mk));
	}
	public function lihat($id)
	{
		$tb_mk = tb_mk::find($id);
		return view('tb_mk.lihat')->with(array('tb_mk'=>$tb_mk));
	}
	public function update($id, Request $input)
	{
		$tb_mk = tb_mk::find($id);
		$tb_mk->title = $input->title;
		$tb_mk->keterangan = $input->keterangan;
		$informasi=$tb_mk->save() ? 'Berhasil update data' : 'gagal update data';
		return redirect('tb_mk')->with(['informasi'=>$informasi]);
	}
	public function hapus($id)
	{
		$tb_mk = tb_mk::find($id);
		$informasi=$tb_mk->delete() ? 'Berhasil hapus data' : 'gagal hapus data';
		return redirect('tb_mk')->with(['informasi'=>$informasi]);
	}
}
