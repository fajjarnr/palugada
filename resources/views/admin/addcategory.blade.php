@extends('layouts.master')

@section('title')
Tambah Kategori
@endsection

@section('content')
<div class="container">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Tambah Kategori</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
    <form role="form" method="POST" action="{{route('tambah-kategori')}}" name="add_category" id="add_category">
        {{ csrf_field() }}
        <div class="card-body">
                <div class="form-group">
                    <label for="kategori">Nama Kategori</label>
                    <input type="text" class="form-control" name="nama" id="kategori" placeholder="Nama kategroi">
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea class="form-control" name="deskripsi" id="deskripsi" placeholder="Deskripsi"></textarea>
                </div>
                <div class="form-group">
                    <label for="url">URL</label>
                    <input type="text" class="form-control" name="url" id="url" placeholder="url">
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <input type="submit" value="Tambah" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>
@endsection
