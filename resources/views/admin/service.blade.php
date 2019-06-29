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

        {{-- modal --}}
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable"
            data-whatever="TambahData">Tambah Data</button>

        <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Isi data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="/admin/dashboard/service/store" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputFile">Input Foto</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">pilih foto</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="InputNama" class="col-form-label">Nama</label>
                                <input type="text" class="form-control" id="InputNama" placeholder="Nama">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Deskripsi</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Deskripsi" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea2">Slogan</label>
                                <textarea class="form-control" id="exampleFormControlTextarea2" placeholder="Slogan" rows="2"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea3">Alamat</label>
                                <textarea class="form-control" id="exampleFormControlTextarea3" placeholder="Alamat" rows="2"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="InputNoHp" class="col-form-label">No Tlp/HP</label>
                                <input type="text" class="form-control" id="InputNoHp" placeholder="No Tlp/HP">
                            </div>
                            <div class="form-group">
                                <label for="InputEmail" class="col-form-label">Email</label>
                                <input type="text" class="form-control" id="InputEmail" placeholder="Email">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" value="Tambah Data" class="btn btn-primary">Tambah Data</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- endmodal --}}

        <br>
        <br>
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
