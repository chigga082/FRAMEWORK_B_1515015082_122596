<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    protected $table = 'ruangan';
    protected $fillable = ['title'];

    public function Jadwal_Matakuliah(){
    	return $this->hasMany('App\Jadwal_Matakuliah');
    }
    //berelasi dengan table Jadwal_Matakuliah dan berperan sebagai table induk (Memberikan satu nilai kepada table jadwal_matakuliah)
}
