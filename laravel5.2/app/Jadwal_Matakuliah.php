<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal_Matakuliah extends Model
{
    protected $table = 'jadwal_matakuliah';
    // protected $fillable = ['mahasiwa_id','ruangan_id','dosen_matakuliah_id'];
    protected $guarded = ['id'];

    public function Mahasiswa(){
    	return $this->belongsTo('App\Mahasiswa');
    }
    //berelasi dengan table mahasiswa dan berperan sebagai table anak (Mengambil nilai dari table mahasiswa)
    public function Ruangan(){
    	return $this->belongsTo('App\Ruangan');
    }
    //berelasi dengan table ruangan dan berperan sebagai table anak (Mengambil nilai dari table ruangan)
    public function Dosen_Matakuliah(){
    	return $this->belongsTo(Dosen_Matakuliah::class,'dosen_matakuliah_id');
    }
    //berelasi dengan table dosen_matakuliah dan berperan sebagai table anak (Mengambil nilai dari table dosen_matakuliah)
}
