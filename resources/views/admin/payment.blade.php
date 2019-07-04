@extends('layouts.master')

@section('title')
Riwayat Pembayaran
@endsection

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Riwayat Pembayaran</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">

            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th>Total</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($payments as $p)
                    <tr>
                        <td>{{ $p->id }}</td>
                        <td>{{ $p->tanggal }}</td>
                        <td>{{ $p->status }}</td>
                        <td>{{ $p->total }}</td>
                        <td class="center">
                            <a href="">
                                <button class="btn btn-warning">Nota</button>
                            </a>
                            <a href="">
                                <button class="btn btn-danger" >Lihat Pembayaran</button>
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


