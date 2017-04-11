<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $table = 'pengguna';
    protected $fillable = ['username','password'];

    public function Dosen(){
    	return $this->hasOne('App\Dosen');
    }
    //berelasi dengan table Dosen dan berperan sebagai table induk (Memberikan satu nilai kepada table dosen)

    public function Mahasiswa(){
    	return $this->hasOne('App\Mahasiswa');
    }
    //berelasi dengan table Mahasiswa dan berperan sebagai table induk (Memberikan satu nilai kepada table mahasiswa)
}
