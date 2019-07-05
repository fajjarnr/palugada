@extends('layouts.master')

@section('title')
Laundry
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Laundry</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">

        <a href="{{route('create.laundry')}}">
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
                @foreach ($laundry as $l)
                <tr>
                    <td>{{ $l->id }}</td>
                    <td><img width="80px" src="{{ url('/data_file/'.$l->image) }}"></td>
                    <td>{{ $l->nama_jasa }}</td>
                    <td>{{ $l->deskripsi }}</td>
                    <td>{{ $l->slogan }}</td>
                    <td>{{ $l->harga }}</td>
                    <td>{{ $l->alamat }}</td>
                    <td>{{ $l->notlp }}</td>
                    <td>{{ $l->email }}</td>
                    <td>
                        <a href="{{route('edit.laundry', $l->id)}}">
                            <button class="btn btn-warning">Edit</button>
                        </a>
                        <a href="{{route('delete.laundry', $l->id)}}">
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
