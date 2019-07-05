@extends('layouts.master')

@section('title')
Home Cleaner
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Home Cleaner</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">

        <a href="{{route('create.homecleaner')}}">
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
                @foreach ($homecleaner as $h)
                <tr>
                    <td>{{ $h->id }}</td>
                    <td><img width="80px" src="{{ url('/data_file/'.$h->image) }}"></td>
                    <td>{{ $h->nama_jasa }}</td>
                    <td>{{ $h->deskripsi }}</td>
                    <td>{{ $h->slogan }}</td>
                    <td>{{ $h->harga }}</td>
                    <td>{{ $h->alamat }}</td>
                    <td>{{ $h->notlp }}</td>
                    <td>{{ $h->email }}</td>
                    <td>
                        <a href="{{route('edit.homecleaner', $h->id)}}">
                            <button class="btn btn-warning">Edit</button>
                        </a>
                        <a href="{{route('delete.homecleaner', $h->id)}}">
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
