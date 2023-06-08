<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
public function index(){
    $dokters = Dokter::all();
    return view('dokter/index', [
        'dokters' => $dokters
    ]);
}

public function create()
{
    return view('dokter.create');
}
// method untuk menyimpan form tambah dokter ke database
    public function store(Request $request)
    {

    // validasi data form
    $request->validate([
        'nama' => 'required|min:3',
        'spesialis' => 'required',
        'alamat' => 'required',
        'telp' => 'required|numeric',
    ]);

        Dokter::create([
            'nama' => $request->nama,
            'spesialis' => $request->spesialis,
            'alamat' => $request->alamat,
            'telp' => $request->telp,
        ]);

        return redirect('/dokter');
    }

    //method untuk menampilkan form edit
    public function edit($id){
        //cari dokter berdasarkan id
        $dokter = Dokter::find($id);

        return view('dokter.edit', [
            'dokter' => $dokter
        ]);

    }

    //method untuk update dokter
    public function update($id, Request $request){
            // validasi data form
    $request->validate([
        'nama' => 'required|min:3',
        'spesialis' => 'required',
        'alamat' => 'required',
        'telp' => 'required|numeric',
    ]);

     //cari dokter berdasarkan id
     $dokter = Dokter::find($id);

     // menyimpan perubahan
     $dokter->update([
        'nama' => $request->nama,
        'spesialis' => $request->spesialis,
        'alamat' => $request->alamat,
        'telp' => $request->telp,
     ]);

     return redirect('/dokter')->with('success', 'Data dokter berhasil di ubah.');
    }

    //method untuk menghapus data dokter
    public function destroy(Request $request)
    {
        dokter::destroy($request->id);

        return redirect('/dokter');
    }

}