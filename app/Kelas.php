<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    //
    protected $table = 'kelas';
    protected $fillable = array('kelas','dosen_wali');

    public function mahasiswa(){
		return $this->hasOne('App\Mahasiswa', 'kelas_id');
	}
}
