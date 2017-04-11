<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Jadwal_Matakuliah;
use App\Mahasiswa;
use App\Dosen_Matakuliah;
use App\Ruangan;

class Jadwal_MatakuliahController extends Controller
{
    protected $informasi = 'Gagal melakukan aksi';
    public function awal(){
        $semuaJadwalMatakuliah = Jadwal_Matakuliah::all();
       // dd($semuaJadwalMatakuliah);
       return view('jadwal_matakuliah.awal', compact('semuaJadwalMatakuliah'));
    }

    public function tambah()
    {
    	$mahasiswa = new Mahasiswa;
        $ruangan = new Ruangan;
        $dosenMatakuliah = new Dosen_Matakuliah;
        return view('jadwal_matakuliah.tambah',compact('mahasiswa','ruangan','dosenMatakuliah'));
    }
    public function simpan(Request $input)
    {
    	$jadwalMatakuliah = new Jadwal_Matakuliah($input->only('ruangan_id','dosen_matakuliah_id','mahasiswa_id'));
    	if ($jadwalMatakuliah->save()) $this->informasi= "Jadwal mahasiswa berhasil disimpan";
    	return redirect('jadwal_matakuliah')->with(['informasi'=>$this->informasi]);
    }
    public function lihat($id){
        $jadwalMatakuliah=Jadwal_Matakuliah::find($id);
        return view('jadwal_matakuliah.lihat',compact("jadwalMatakuliah"));
    }
    public function edit($id){
        $jadwal_matakuliah=Jadwal_Matakuliah::find($id);
        $mahasiswa=new Mahasiswa;
        $ruangan = new Ruangan;
        $dosenMatakuliah = new Dosen_Matakuliah;
        return view('jadwal_matakuliah.edit',compact('mahasiswa','ruangan','dosenMatakuliah','jadwal_matakuliah'));
    }
    public function update($id, Request $input){
        $jadwalMatakuliah=Jadwal_Matakuliah::find($id);
        $jadwalMatakuliah->fill($input->only('ruangan_id','dosen_matakuliah_id','mahasiswa_id'));
        if ($jadwalMatakuliah->save()) $this->informasi="Jadwal Mahasiswa berhasil diperbarui";
        return redirect('jadwal_matakuliah')->with(['informasi'=>$this->informasi]);
    }
    public function hapus($id, Request $input){
        $jadwalMatakuliah=Jadwal_Matakuliah::find($id);
        if ($jadwalMatakuliah->delete()) $this->informasi="Jadwal Mahasiswa berhasil dihapus";
        return redirect('jadwal_matakuliah')->with(['informasi'=>$this->informasi]);
    }
}
?>