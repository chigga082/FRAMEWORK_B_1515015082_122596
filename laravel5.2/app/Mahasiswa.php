<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    // protected $fillable = ['nama','nim','alamat','pengguna_id'];
    protected $guarded=['id'];

    public function getUsernameAttribute(){
        return $this->pengguna->username;
    }

    public function listMahasiswaDanNim(){
        $out = [];
        foreach ($this->all() as $mhs) {
            $out[$mhs->id]="{$mhs->nama} ({$mhs->nim})";
        }
        return $out;
    }

    public function Jadwal_Matakuliah(){
    	return $this->hasMany('App\Jadwal_Matakuliah');
    }
    //berelasi dengan table Jadwal_Matakuliah dan berperan sebagai table induk (Dapat memberikan satu atau lebih dari satu nilai kepada table jadwal_matakuliah)

    public function Pengguna(){
    	return $this->belongsTo('App\Pengguna');
    }
    //berelasi dengan table pengguna dan berperan sebagai table anak (Mengambil nilai dari table pengguna)
}
