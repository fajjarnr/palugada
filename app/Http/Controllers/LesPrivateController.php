<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LesPrivate;

class LesPrivateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lesprivate = LesPrivate::get();
        return view('admin.service.lesprivate', compact('lesprivate'));
    }

    public function userlesprivate()
    {
        $lesprivate = LesPrivate::get();
        return view('lesprivate', compact('lesprivate'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service.addlesprivate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|max:5000',
            'nama_jasa' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
            'alamat' => 'required',
            'notlp' => 'required',
            'email' => 'required'
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('data_file'), $new_name);
        $from_data = array(
            'nama_jasa' => $request->nama_jasa,
            'deskripsi' => $request->deskripsi,
            'slogan'    => $request->slogan,
            'harga'     => $request->harga,
            'alamat'    => $request->alamat,
            'notlp'     => $request->notlp,
            'email'     => $request->email,
            'image'     => $new_name
        );

        LesPrivate::create($from_data);

        return redirect('admin/les-private')->with('success', 'Data berhasil di tambahkan');
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
}
