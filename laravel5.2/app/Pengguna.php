<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model implements AuthenticatableContract
{
	use Authenticatable;
    protected $table = 'pengguna';
    protected $guarded = ['id'];

    public function Dosen(){
    	return $this->hasOne('App\Dosen');
    }
    //berelasi dengan table Dosen dan berperan sebagai table induk (Memberikan satu nilai kepada table dosen)

    public function Mahasiswa(){
    	return $this->hasOne('App\Mahasiswa');
    }
    //berelasi dengan table Mahasiswa dan berperan sebagai table induk (Memberikan satu nilai kepada table mahasiswa)
}
