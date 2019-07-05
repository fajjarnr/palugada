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
        <form role="form" method="POST" action="{{route('update.category', $data->id)}}" enctype="multipart/form-data"
            name="add_category" id="add_category">
            @csrf
            @method('PATCH')
            <div class="card-body">
                <div class="container">
                    @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                        {{ $error }} <br />
                        @endforeach
                    </div>
                    @endif
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="Namakategori">Nama Kategori</label>
                        <input type="text" class="form-control" name="nama_kategori" id="Namakategori" value="{{ $data->nama_kategori }}"
                            placeholder="Nama kategroi">
                    </div>
                    <div class="form-group">
                        <label for="desc">Deskripsi</label>
                        <textarea class="form-control" name="deskripsi" id="desc" value="{{ $data->deskripsi }}"
                            placeholder="Masukan Deskripsi"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="url">URL</label>
                        <input type="text" class="form-control" name="url" id="url" placeholder="url" value="{{ $data->url }}" >
                    </div>
                    <div class="form-group">
                        <label for="image">Pilih Image</label>
                        <div clas s="col-md-8">
                            <input type="file" name="image" id="image">
                            <img src="{{ url('/data_file/'.$data->image) }}" width="100">
                            <input type="hidden" name="hidden_image" value="{{ $data->image }}">
                        </div>
                    </div>
                </div>

                <!-- /.card-body -->

                <div class="card-footer">
                    <input type="submit" value="Update" class="btn btn-primary">
                </div>
        </form>
    </div>
</div>
@endsection
