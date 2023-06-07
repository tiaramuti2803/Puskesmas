<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class DokterController extends Controller
{
    public function index(){
        $dokters = Dokter::all();
        return view('dokter.index',[
            'dokters' => $dokters
        ]);
    }
    
    public function create(){
        return view('dokter.create');
    }

    //method untuk menyimpan form tambahan dokter ke database
    public function store(Request $request)
    {
      
        Dokter::create([
            'nama' => $request->nama,
            'spesialis' => $request->spesialis,
            'telp' => $request->telp,
        ]);

        return redirect('/dokter');
    }

    //method untuk menghapus data dokter
    public function destroy(request $request)
    {
        Dokter::destroy($request->id);

        return redirect('/dokter');
    }
}