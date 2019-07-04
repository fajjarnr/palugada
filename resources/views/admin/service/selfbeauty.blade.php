@extends('layouts.master')

@section('title')
Self Beauty
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Self Beauty</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">

        <a href="{{route('create.selfbeauty')}}">
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
                @foreach ($selfbeauty as $s)
                <tr>
                    <td>{{ $s->id }}</td>
                    <td><img width="80px" src="{{ url('/data_file/'.$s->image) }}"></td>
                    <td>{{ $s->nama_jasa }}</td>
                    <td>{{ $s->deskripsi }}</td>
                    <td>{{ $s->slogan }}</td>
                    <td>{{ $s->harga }}</td>
                    <td>{{ $s->alamat }}</td>
                    <td>{{ $s->notlp }}</td>
                    <td>{{ $s->email }}</td>
                    <td>
                        <a href="">
                            <button class="btn btn-warning">Edit</button>
                        </a>
                        <a href="">
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
