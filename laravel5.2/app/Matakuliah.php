<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    protected $table = 'matakuliah';
    // protected $fillable = ['title','keterangan'];
    protected $guarded = 'id';

    public function Dosen_Matakuliah(){
    	return $this->hasMany('App\Dosen_Matakuliah');
    }
    //berelasi dengan table Dosen_Matakuliah dan berperan sebagai table induk (Dapat memberikan satu atau lebih dari satu nilai kepada table dosen_matakuliah)
}
