@extends('layouts.master')

@section('title')
Data Kategori
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Kategori</h3>
        </div>
        <!-- /.card-header -->

        <div class="card-body">

            <a href="{{route('create.category')}}">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable"
                    data-whatever="TambahData">Tambah Data</button>
            </a>

            <br><br>

            @if ($massage = Session::get('success'))
            <div class="alert alert-success">
                <p>{{$massage}}</p>
            </div>
            @endif

            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Image</th>
                        <th>Nama Kategori</th>
                        <th>Deskripsi</th>
                        <th>url</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $d)
                    <tr>
                        <td>{{ $d->id }}</td>
                        <td><img width="80px" src="{{ url('/data_file/'.$d->image) }}"></td>
                        <td>{{ $d->nama_kategori }}</td>
                        <td>{{ $d->deskripsi }}</td>
                        <td>{{ $d->url }}</td>
                        <td class="center">
                            <a href="{{route('edit.category', $d->id) }}">
                                <button class="btn btn-warning">Edit</button>
                            </a>
                            <a href="{{route('delete.category', $d->id) }}">
                                <button class="btn btn-danger">Delete</button>
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
