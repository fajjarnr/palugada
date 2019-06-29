@extends('layouts.master')

@section('title')
Dashboard
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fa fa-warning"></i>
                        Alerts
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fa fa-ban"></i> Alert!</h5>
                        <p>Untuk mengaktifkan akun konfirmasi alamat email terlebih dahulu
                        </p>
                        <p>Jika sudah silahkan refresh halaman ini!</p>
                    </div>
                    <div class="alert alert-info alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fa fa-info"></i> Alert!</h5>
                        Jangan lupa untuk menambahkan anggota anda
                    </div>
                    <div class="alert alert-warning alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fa fa-warning"></i> Alert!</h5>
                        Jangan lupa untuk Upload Bukti Pembayaran
                    </div>
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fa fa-check"></i> Alert!</h5>
                        success, Untuk melanjutkan isi biodata dengan lengkap terlebih dahulu.
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
</div>

@endsection


