<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    public function service()
    {
    	// mengambil data dari table user
    	$services = DB::table('services')->get();

    	// mengirim data user ke view user
    	return view('admin.service', ['services' => $services]);

    }

    public function tambah()
    {
        // memanggil view tambah
        return view('admin.service');
    }

    public function store(Request $request)
    {
        // insert data ke table services
        DB::table('services')->insert([
            'foto' => $request->foto,
            'nama_jasa' => $request->nama_jasa,
            'deskripsi' => $request->deskripsi,
            'slogan' => $request->slogan,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'email' => $request->email
        ]);
        // alihkan halaman ke halaman services
        return redirect('/services');

    }

    // public function upload(){
	// 	return view('admin.service');
	// }

	// public function proses_upload(Request $request){
	// 	$this->validate($request, [
	// 		'file' => 'required',
	// 		'keterangan' => 'required',
	// 	]);

	// 	// menyimpan data file yang diupload ke variabel $file
	// 	$file = $request->file('file');

    //   	        // nama file
	// 	echo 'File Name: '.$file->getClientOriginalName();
	// 	echo '<br>';

    //   	        // ekstensi file
	// 	echo 'File Extension: '.$file->getClientOriginalExtension();
	// 	echo '<br>';

    //   	        // real path
	// 	echo 'File Real Path: '.$file->getRealPath();
	// 	echo '<br>';

    //   	        // ukuran file
	// 	echo 'File Size: '.$file->getSize();
	// 	echo '<br>';

    //   	        // tipe mime
	// 	echo 'File Mime Type: '.$file->getMimeType();

    //   	        // isi dengan nama folder tempat kemana file diupload
	// 	$tujuan_upload = 'data_file';

    //             // upload file
	// 	$file->move($tujuan_upload,$file->getClientOriginalName());
	// }

    public function edit($id)
    {
        // mengambil data services berdasarkan id yang dipilih
        $services = DB::table('services')->where('pegawai_id',$id)->get();
        // passing data services yang didapat ke view edit.blade.php
        return view('edit',['services' => $services]);

    }

    public function hapus($id)
    {
        // menghapus data user berdasarkan id yang dipilih
        DB::table('services')->where('id',$id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('admin/dashboard/service');
    }
}
