@extends('layouts.master')

@section('title')
Les Private
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Les Private</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">

        <a href="{{route('create.lesprivate')}}">
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
                @foreach ($lesprivate as $lp)
                <tr>
                    <td>{{ $lp->id }}</td>
                    <td><img width="80px" src="{{ url('/data_file/'.$lp->image) }}"></td>
                    <td>{{ $lp->nama_jasa }}</td>
                    <td>{{ $lp->deskripsi }}</td>
                    <td>{{ $lp->slogan }}</td>
                    <td>{{ $lp->harga }}</td>
                    <td>{{ $lp->alamat }}</td>
                    <td>{{ $lp->notlp }}</td>
                    <td>{{ $lp->email }}</td>
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
