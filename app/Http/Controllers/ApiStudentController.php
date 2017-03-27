<?php

namespace App\Http\Controllers;


use App\Mahasiswa;
use Illuminate\Http\Request;

class ApiStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Mahasiswa::all();
        return $data;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $data = [
//            "nim" => $request->input('nim'),
//            "nama" => $request->input('nama'),
//            "email" => $request->input('email'),
//            "kelas_id" => $request->input('kelas')
//        ];
        $data = Mahasiswa::create($request->all());
        return [
            "error" => false,
            "message" => "Berhasil inputkan data",
            "data" => $data
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mahasiswa  = Mahasiswa::find($id);
        return view('student.show')->with('mhs', $mahasiswa);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Mahasiswa::find($id);
        $data->nama = $request->input("nama");
        $data->email = $request->input("email");
        $data->kelas_id = $request->input("kelas_id");
        $data->save();
        return [
            "error" => false,
            "message" => "Berhasil update data",
            "data" => $data
        ];

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mhs = Mahasiswa::find($id);
        $mhs->delete();
        return [
            "error" => false,
            "message" => "Berhasil delete data",
            "data" => $mhs
        ];
    }
}
