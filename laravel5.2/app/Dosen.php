<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = 'dosen';
    // protected $fillable = ['nama','nip','alamat','pengguna_id'];
    protected $guarded = 'id';

    public function getUsernameAttribute(){
        return $this->pengguna->username;
    }

    public function listDosendanNIP(){
        $out = [];
        foreach ($this->all() as $dsn) {
            $out[$dsn->id]="{$dsn->nama} ({$dsn->nip})";
        }
        return $out;
    }

    public function Pengguna(){
    	return $this->belongsTo('App\Pengguna');
    }
    //berelasi dengan table pengguna dan berperan sebagai table anak (Mengambil nilai dari table pengguna)

    public function Dosen_Matakuliah(){
    	return $this->hasMany('App\Dosen_Matakuliah');
    }
    //berelasi dengan table Dosen_Matakuliah dan berperan sebagai table induk (Dapat memberikan satu atau lebih dari satu nilai kepada table dosen_matakuliah)
}
