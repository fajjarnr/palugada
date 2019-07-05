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

        return redirect()->route('lesprivate')->with('success', 'Data berhasil di tambahkan');
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
        $lesprivate = LesPrivate::findOrFail($id);
        return view('admin.service.editlesprivate', compact('lesprivate'));
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
        $image_name = $request->hidden_image;
         $image = $request->file('image');
         if($image != '')
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

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('data_file'), $image_name);
         }else{
            $this->validate($request, [
                'nama_jasa' => 'required',
                'deskripsi' => 'required',
            ]);
         }

         $from_data = array(
            'nama_jasa' => $request->nama_jasa,
            'deskripsi' => $request->deskripsi,
            'slogan'    => $request->slogan,
            'harga'     => $request->harga,
            'alamat'    => $request->alamat,
            'notlp'     => $request->notlp,
            'email'     => $request->email,
            'image'     => $image_name
        );

        LesPrivate::whereId($id)->update($from_data);

        return redirect()->route('lesprivate')->with('success', 'Data Berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lesprivate = LesPrivate::findOrFail($id);
        $lesprivate->delete();
        return redirect()->back()->with('success, Data berhasil dihapus');
    }
}
