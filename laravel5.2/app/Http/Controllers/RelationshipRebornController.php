<?php

namespace App\Http\Controllers;

use App\Dosen;
use App\Matakuliah;
class RelationshipRebornController extends Controller
{
    public function ujiHas()
	{
		//return Dosen::has('dosen_matakuliah')->get();
		$data=dosen::has('dosen_matakuliah')->get();
		dd($data);
	}
	public function ujiDoesntHave()
	{
		return Dosen::doesntHave('dosen_matakuliah')->get();
	}
	public function ujiDoesntHaveMK()
	{
		return Matakuliah::doesntHave('dosen_matakuliah')->get();
	}
}
