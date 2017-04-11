<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dosen_Matakuliah;
use App\Dosen;
use App\Matakuliah;


class Dosen_MatakuliahController extends Controller
{
    protected $informasi = 'Gagal melakukan aksi';
    public function awal(){
        $semuaDosenMatakuliah = Dosen_Matakuliah::all();
       return view('dosen_matakuliah.awal', compact('semuaDosenMatakuliah'));
    }
    public function tambah()
    {
        $dosen = new Dosen;
        $matakuliah = new Matakuliah;
        return view('dosen_matakuliah.tambah',compact('dosen','matakuliah'));
    }
    public function simpan(Request $input)
    {
        $dosenMatakuliah = new Dosen_Matakuliah($input->only('dosen_id','matakuliah_id'));
        if ($dosenMatakuliah->save()) 
            $this->informasi= "Dosen matakuliah berhasil disimpan";
        return redirect('dosen_matakuliah')->with(['informasi'=>$this->informasi]);
    }
    public function lihat($id){
        $dosenMatakuliah=Dosen_Matakuliah::find($id);
        return view('dosen_matakuliah.lihat',compact("dosenMatakuliah"));
    }
    public function edit($id){
        $dosenMatakuliah=Dosen_Matakuliah::find($id);
        $dosen=new Dosen;
        $matakuliah = new Matakuliah;
        return view('dosen_matakuliah.edit',compact('dosen','matakuliah','dosenMatakuliah'));
    }
    public function update($id, Request $input){
        $dosenMatakuliah=Dosen_Matakuliah::find($id);
        $dosenMatakuliah->fill($input->only('dosen_id','matakuliah_id'));
        if ($dosenMatakuliah->save()) $this->informasi="Dosen Matakuliah berhasil diperbarui";
        return redirect('dosen_matakuliah')->with(['informasi'=>$this->informasi]);
    }
    public function hapus($id, Request $input){
        $dosenMatakuliah=Dosen_Matakuliah::find($id);
        if ($dosenMatakuliah->delete()) $this->informasi="Jadwal Dosen berhasil dihapus";
        return redirect('dosen_matakuliah')->with(['informasi'=>$this->informasi]);
    }
}
?>