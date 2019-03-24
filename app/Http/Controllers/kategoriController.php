<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategori;
use DB;
use App\Quotation;


class kategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        /*return kategori::all()->toArray();*/

        $kategoris = kategori::all();
        return view('kategori', compact('kategoris'));


    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function tambah()
{
 
	// memanggil view tambah
	return view('tambah');
 
}

// method untuk insert data ke table pegawai
public function abcd(Request $request)
{
	// insert data ke table pegawai
	DB::table('kategori')->insert([
		'id_kategori' => $request->id_kategori,
		'nama_kategori' => $request->nama_kategori,
		'created_at' => $request->created_at,
		'updated_at' => $request->updated_at
	]);
	// alihkan halaman ke halaman kategori
	return redirect('/kategori');

}

// method untuk edit data pegawai
public function editt($id)
{
	// mengambil data pegawai berdasarkan id yang dipilih
	$kategori = DB::table('kategori')->where('id_kategori',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('editt',['kategori' => $kategori]);

}

// update data pegawai
public function updatee(Request $request)
{
	// update data pegawai
	 DB::table('kategori')->where('id_kategori',$request->id)->updatee([
		'id_kategori' => $request->id_kategori,
		'nama_kategori' => $request->nama_kategori,
		'created_at' => $request->created_at,
		'updated_at' => $request->updated_at
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/kategori');
}
// method untuk hapus data pegawai
public function hapuss($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('kategori')->where('id_kategori',$id)->delete();
		
	// alihkan halaman ke halaman pegawai
	return redirect('/kategori');
}
}
