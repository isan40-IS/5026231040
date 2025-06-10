<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TasDBController extends Controller
{
    public function index()
    {
    	// mengambil data dari table tas
        $tas = DB::table('tas')->paginate(10); //defaultnya 15

    	// mengirim data tas ke view index
    	return view('tas/index',['tas' => $tas]);
    }

// method untuk menampilkan view form add item
    public function add(){
        // memanggil view tambah
        return view('tas/add');
    }

    // method untuk insert data ke table tas
public function store(Request $request)
{
	// insert data ke table tas
	DB::table('tas')->insert([
		'merk' => $request->merk,
		'price' => $request->price,
		'availability' => $request->has('availibility') ? 1 : 0,
		'weight' => $request->weight
	]);
	// alihkan halaman ke halaman tas
	return redirect('/tas');

}

// method untuk edit data tas
public function edit($id) //tidak pakai $request karena ada primary key
{
	// mengambil data tas berdasarkan id yang dipilih
	$tas = DB::table('tas')
    ->where('tas_id',$id)
    ->get();
	// passing data tas yang didapat ke view edit.blade.php
	return view('tas/edit',['tas' => $tas]);
}

// update data tas
public function update(Request $request)
{
	// update data tas
	DB::table('tas')->where('tas_id', $request->id)->update([
		'merk' => $request->merk,
		'price' => $request->price,
		'availability' => $request->availability,
		'weight' => $request->weight
	]);
	// alihkan halaman ke halaman tas
	return redirect('/tas');
}

// method untuk hapus data tas
public function hapus($id)
{
	// menghapus data tas berdasarkan id yang dipilih
	DB::table('tas')->where('tas_id',$id)->delete();

	// alihkan halaman ke halaman tas
	return redirect('/tas');
}

public function cari(Request $request) //kalau pakai request, harus tangkap datanya
	{
		// menangkap data pencarian
		$cari = $request->cari; //"cari" sesuai dengan nama form input di cari tas

    		// mengambil data dari table tas sesuai pencarian data
		$tas = DB::table('tas')
		->where('merk','like',"%".$cari."%") //dimana di tabel merk ada unsur .$cari. nya baik di depan belakang ataupun tengah
		->paginate();

    		// mengirim data tas ke view index
		return view('tas/index',['tas' => $tas]);

	}
}
