<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function pengguna()
    {
    	// mengambil data dari table user
    	$users = DB::table('users')->get();

    	// mengirim data user ke view user
    	return view('admin.users', ['users' => $users]);

    }

    public function hapus($id)
    {
        // menghapus data user berdasarkan id yang dipilih
        DB::table('users')->where('id',$id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('admin/dashboard/data-user');
    }
}
