@extends('layouts.master')

@section('title')
Edit Data Entertaiment
@endsection

@section('content')
<div class="container">

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit Data Entertaiment</h3>
        </div>
        <!-- /.card-header -->

        <!-- form start -->
        <form role="form" method="POST" action="{{route('update.entertaiment', $entertaiment->id) }}" enctype="multipart/form-data"
            name="editentertaiment" id="editentertaiment">
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
                        <label for="namajasa">Nama Jasa</label>
                        <input type="text" class="form-control" name="nama_jasa" id="namajasa" value="{{ $entertaiment->nama_jasa }}"
                            placeholder="Nama kategroi">
                    </div>
                    <div class="form-group">
                        <label for="desc">Deskripsi</label>
                        <textarea class="form-control" name="deskripsi" id="desc" value="{{ $entertaiment->feskripsi }}"
                            placeholder="Masukan Deskripsi"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="slogan">Slogan</label>
                        <input type="text" class="form-control" name="slogan" id="slogan" value="{{ $entertaiment->slogan }}" placeholder="Slogan">
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="text" class="form-control" name="harga" id="harga" value="{{ $entertaiment->harga }}" placeholder="Harga">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" name="alamat" id="alamat" value="{{ $entertaiment->alamat }}"
                            placeholder="Masukan Alamat"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="notlp">No Tlp/HP</label>
                        <input type="text" class="form-control" name="notlp" id="notlp" value="{{ $entertaiment->notlp }}" placeholder="No Tlp/HP">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" value="{{ $entertaiment->email }}" placeholder="email">
                    </div>
                    <div class="form-group">
                        <label for="image">Pilih Image</label>
                        <div clas s="col-md-8">
                            <input type="file" name="image" id="image">
                            <img src="{{ url('/data_file/'.$entertaiment->image) }}" width="100">
                            <input type="hidden" name="hidden_image" value="{{ $entertaiment->image }}">
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
