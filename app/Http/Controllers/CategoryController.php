<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Category;

class CategoryController extends Controller
{
    public function TambahKategori(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();

            $category = new Category;
            $category->nama = $data['nama'];
            $category->deskripsi = $data['deskripsi'];
            $category->url = $data['url'];
            $category->save();
            return redirect(route('data-kategori'));
        }
        return view('admin.addcategory');
    }

    public function editKategori(Request $request , $id = null){
        if($request->isMethod('post')){
            $data = $request->all;
            Category::where(['id'=>$id])->update(['nama'=>$data['nama'], 'deskripsi'=>$data['deskripsi'], 'url'=>$data['url']]);
            return redirect(route('data-kategori'));
        }
        $categoryDetails = Category::where(['id'=>$id])->first();
        return view('admin.editcategory')->with(compact('categoryDetails'));
    }

    public function ViewCategory(){
        $categories = Category::get();
        $categories = json_decode(json_encode($categories));
        return view('admin.viewcategory')->with(compact('categories')) ;
    }
}
