<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiController extends Controller
{
    public function index()
    {
    	// mengambil data dari table karyawan
        $nilai = DB::table('nilai')->paginate(10); //defaultnya 15

    	// mengirim data karyawan ke view index
    	return view('EAS/index',['nilai' => $nilai]);
    }

// method untuk menampilkan view form add item
    public function add(){
        // memanggil view tambah
        return view('EAS/add');
    }

    // method untuk insert data ke table karyawan
public function store(Request $request)
{
	// insert data ke table karyawan
	DB::table('nilai')->insert([
        'normorinduksiswa' => $request->normorinduksiswa,
		'nilaiangka' => $request->nilaiangka,
		'sks' => $request->sks
	]);
	// alihkan halaman ke halaman karyawan
	return redirect('/EAS');
}

}
