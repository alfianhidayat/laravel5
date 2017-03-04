<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    //
    protected $table = 'mahasiswa';
    protected $fillable = array('nim','nama','email','kelas_id');

    public function kelas(){
		return $this->belongsTo('App\Kelas');
	}
}
