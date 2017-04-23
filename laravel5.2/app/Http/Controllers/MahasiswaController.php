<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\MahasiswaRequest;
use App\Http\Requests;
use App\Mahasiswa;
use App\Pengguna;

class MahasiswaController extends Controller
{
    protected $informasi = 'Gagal melakukan aksi';

    // public function mahasiswa(){
    //     $mahasiswa= mahasiswa::all();
    //     // dd($mahasiswa)
    //     foreach ($mahasiswa as $mhs) {
    //         echo "Nama: ".$mhs->nama;
    //         echo "<br>";
    //         echo "Username: ".$mhs->pengguna->username;
    //         echo "<br><br>";
    //     }
    // }

    public function awal()
    {
    	$semuaMahasiswa = Mahasiswa::paginate(2);
    	return view('mahasiswa.awal',compact('semuaMahasiswa'));
    }
    public function tambah()
    {
    	return view('mahasiswa.tambah');
    }
    public function simpan(MahasiswaRequest $input)
    {
		$pengguna=new Pengguna($input->only('username','password'));
    	if ($pengguna->save()) {
    		$mahasiswa = new Mahasiswa();
	    	$mahasiswa->nama = $input->nama;
	    	$mahasiswa->nim = $input->nim;
	    	$mahasiswa->alamat = $input->alamat;
	    	if ($pengguna->Mahasiswa()->save($mahasiswa)) $this->informasi='Berhasil simpan data';
	    }
    	return redirect('mahasiswa')->with(['informasi' => $this ->informasi]);
    }
    public function edit($id){
    	$mahasiswa = Mahasiswa::find($id);
    	return view('mahasiswa.edit')->with(array('mahasiswa'=>$mahasiswa));
    }
    public function lihat($id){
    	$mahasiswa=Mahasiswa::find($id);
    	return view('mahasiswa.lihat')->with(array('mahasiswa'=>$mahasiswa));
    }
    public function update($id, MahasiswaRequest $input){
    	$mahasiswa=Mahasiswa::find($id);
    	$mahasiswa->nama=$input->nama;
    	$mahasiswa->nim=$input->nim;
    	$mahasiswa->alamat=$input->alamat;
		$mahasiswa->save();
    	if (!is_null($input->username)){
            $pengguna=$mahasiswa->pengguna->fill($input->only('username'));
            if (!empty($input->password)) $pengguna->password=$input->password;
            if ($pengguna->save()) $this->informasi='Berhasil simpan data';
        } else{
            $this->informasi = 'Berhasil simpan data';
        }
    	return redirect('mahasiswa')->with(['informasi'=>$this->informasi]);
    }
    public function hapus($id){
    	$mahasiswa=Mahasiswa::find($id);
    	if ($mahasiswa->delete()) {
    		if ($mahasiswa->delete()) $this->informasi='Berhasil hapus data';
    	}
    	return redirect('mahasiswa')->with(['informasi'=> $this->informasi]);
    }
}