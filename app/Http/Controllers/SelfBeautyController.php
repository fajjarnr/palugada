<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SelfBeauty;

class SelfBeautyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $selfbeauty = SelfBeauty::get();
        return view('admin.service.selfbeauty', compact('selfbeauty'));
    }

    public function userselfbeauty()
    {
        $selfbeauty = SelfBeauty::get();
        return view('selfbeauty', compact('selfbeauty'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service.addselfbeauty');
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

        SelfBeauty::create($from_data);

        return redirect()->route('selfbeauty')->with('success', 'Data berhasil di tambahkan');
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
        $selfbeauty = SelfBeauty::findOrFail($id);
        return view('admin.service.editselfbeauty', compact('selfbeauty'));
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

        SelfBeauty::whereId($id)->update($from_data);

        return redirect()->route('selfbeauty')->with('success', 'Data Berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $selfbeauty = SelfBeauty::findOrFail($id);
        $selfbeauty->delete();
        return redirect()->back()->with('success, Data berhasil dihapus');
    }
}
