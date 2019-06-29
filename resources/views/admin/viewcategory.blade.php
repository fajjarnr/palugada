@extends('layouts.master')

@section('title')
Data Kategori
@endsection

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Kategori</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">

            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kategori</th>
                        <th>Deskripsi</th>
                        <th>url</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $c)
                    <tr>
                        <td>{{ $c->id }}</td>
                        <td>{{ $c->nama }}</td>
                        <td>{{ $c->deskripsi }}</td>
                        <td>{{ $c->url }}</td>
                        <td class="center">
                            <a href="">
                                <button class="btn btn-warning">Edit</button>
                            </a>
                            <a href="">
                                <button class="btn btn-danger" >Delete</button>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
</div>
@endsection
