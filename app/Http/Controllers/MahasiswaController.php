<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    //
    public function index(){
    	$data = Mahasiswa::all();
    	return view('mahasiswa',compact('data','$data'));
    }
}
