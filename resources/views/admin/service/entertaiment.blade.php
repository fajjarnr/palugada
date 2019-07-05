@extends('layouts.master')

@section('title')
Entertaiment
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Entertaiment</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">

        <a href="{{route('create.entertaiment')}}">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable"
                data-whatever="TambahData">Tambah Data</button>
        </a>

        <br><br>
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Foto</th>
                    <th>Nama Jasa</th>
                    <th>Deskripsi</th>
                    <th>slogan</th>
                    <th>Harga</th>
                    <th>Alamat</th>
                    <th>No Tlp/HP</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($entertaiment as $e)
                <tr>
                    <td>{{ $e->id }}</td>
                    <td><img width="80px" src="{{ url('/data_file/'.$e->image) }}"></td>
                    <td>{{ $e->nama_jasa }}</td>
                    <td>{{ $e->deskripsi }}</td>
                    <td>{{ $e->slogan }}</td>
                    <td>{{ $e->harga }}</td>
                    <td>{{ $e->alamat }}</td>
                    <td>{{ $e->notlp }}</td>
                    <td>{{ $e->email }}</td>
                    <td>
                        <a href="{{route('edit.entertaiment', $e->id)}}">
                            <button class="btn btn-warning">Edit</button>
                        </a>
                        <a href="{{route('delete.entertaiment', $e->id)}}">
                            <button class="btn btn-danger">Hapus</button>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
@endsection
