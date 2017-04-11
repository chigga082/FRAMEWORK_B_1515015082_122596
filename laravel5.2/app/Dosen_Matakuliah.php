<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen_Matakuliah extends Model
{
    protected $table = 'dosen_matakuliah';
    protected $fillable = ['dosen_id','matakuliah_id'];
    protected $guarded = 'id';

    public function listDosenDanMatakuliah(){
        $out = [];
        foreach ($this->all() as $dsnMtk) {
            $out[$dsnMtk->id]="{$dsnMtk->dosen->nama} (Matakuliah{$dsnMtk->matakuliah->title})";
        }
        return $out;
    }

    public function Jadwal_Matakuliah(){
    	return $this->hasMany('App\Jadwal_Matakuliah');
    }
    //berelasi dengan table Jadwal_Matakuliah dan berperan sebagai table induk (Dapat memberikan satu atau lebih dari satu nilai kepada table jadwal_matakuliah)

    public function Matakuliah(){
    	return $this->belongsTo(Matakuliah::class,'matakuliah_id');
    }
    //berelasi dengan table matakuliah dan berperan sebagai table anak (Mengambil nilai dari table matakuliah)
    public function Dosen(){
    	return $this->belongsTo('App\Dosen');
    }
    //berelasi dengan table dosen dan berperan sebagai table anak (Mengambil nilai dari table dosen)
}
