@extends('layouts.master')

@section('title')
Edit Kategori
@endsection

@section('content')
<div class="container">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit Kategori</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
    <form role="form" method="POST" action="{{route('edit-kategori')}}" name="edit_category" id="edit_category">
        {{ csrf_field() }}
        <div class="card-body">
                <div class="form-group">
                    <label for="kategori">Nama Kategori</label>
                    <input type="text" class="form-control" name="nama" id="kategori" placeholder="Nama kategroi" value="{{ $categoryDetails->nama}}">
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <input type="text" class="form-control" name="deskripsi" id="deskripsi" placeholder="deskripsi" value="{{ $categoryDetails->deskripsi}}">
                </div>
                <div class="form-group">
                    <label for="url">URL</label>
                    <input type="text-area" class="form-control" name="url" id="url" placeholder="url" {{ $categoryDetails->url}}>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <input type="submit" value="Edit Kategori" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>
@endsection
