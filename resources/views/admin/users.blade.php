@extends('layouts.master')

@section('title')
Data Pengguna
@endsection

@section('content')
<div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Pengguna</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $u)
                        <tr>
                            <td>{{ $u->id }}</th>
                            <td>{{ $u->name }}</th>
                            <td>{{ $u->email }}</th>
                            <td>{{ $u->password }}</td>
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
</div>
@endsection
