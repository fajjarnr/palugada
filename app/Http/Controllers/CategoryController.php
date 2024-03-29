<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Category::get();
        return view('admin.category', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addcategory');
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
            'nama_kategori' => 'required',
            'deskripsi' => 'required',
            'url' => 'required',
        	'image' => 'required|image|max:5000'
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('data_file'), $new_name);
        $from_data = array(
            'nama_kategori' => $request->nama_kategori,
            'deskripsi' => $request->deskripsi,
            'url'           => $request->url,
            'image'         => $new_name
        );

        Category::create($from_data);

        return redirect('admin/category')->with('success', 'Data berhasil di tambahkan');
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
        $data = Category::findorFail($id);
        return view('admin.editcategory', compact('data'));
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
                'nama_kategori' => 'required',
                'deskripsi' => 'required',
                'url' => 'required',
                'image' => 'required|image|max:5000'
            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('data_file'), $image_name);
         }else{
            $this->validate($request, [
                'nama_kategori' => 'required',
                'deskripsi' => 'required',
            ]);
         }

         $from_data = array(
            'nama_kategori' => $request->nama_kategori,
            'deskripsi'     => $request->deskripsi,
            'url'           => $request->url,
            'image'         => $image_name
        );

        Category::whereId($id)->update($from_data);

        return redirect('admin/category')->with('success', 'Data Berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Category::findOrFail($id);
        $data->delete();
        return redirect()->back()->with('success', 'Data berhasil di hapus');
    }
}
