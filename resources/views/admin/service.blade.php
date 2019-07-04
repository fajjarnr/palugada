@extends('layouts.master')

@section('title')
Data Jasa
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Jasa</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">

        <a href="">
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
                    <th>Alamat</th>
                    <th>No Tlp/HP</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($services as $s)
                <tr>
                    <td>{{ $s->id }}</th>
                    <td>{{ $s->foto }}</th>
                    <td>{{ $s->nama_jasa }}</th>
                    <td>{{ $s->deskripsi }}</td>
                    <td>{{ $s->slogan }}</th>
                    <td>{{ $s->alamat }}</th>
                    <td>{{ $s->no_hp }}</th>
                    <td>{{ $s->email }}</td>
                    <td>
                        <a href="/data-pengguna/hapus/{{ $u->id }}">
                            <button class="btn btn-warning">Edit</button>
                        </a>
                    </td>
                    <td>
                        <a href="/data-pengguna/hapus/{{ $u->id }}">
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
