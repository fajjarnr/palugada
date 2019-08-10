@extends('layouts.app')

@section('title')
Massage
@endsection

@section('content')

@foreach ($massage as $m)
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-12 shadow-sm">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img class="card-img-top" width="100%" height="250"
                                src="{{ url('/data_file/'.$m->image) }}">
                        </div>
                        <div class="col-md-8">
                        <h4><b>{{ $m->nama_jasa}}</b></h4>
                            <p class="card-text">{{ $m->slogan }}</p>
                            <h5>Deskripsi :</h5>
                            <p class="card-text">{{ $m->deskripsi}}</p>
                            <p><b>Alamat :</b>{{ $m->alamat}}</p>
                            <p><b>No Tlp/Hp : </b>{{ $m->notlp}}</p>
                            <p><b>Email : </b>{{ $m->email}}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <p><b>Harga : </b>Rp.{{ $m->harga }}</p>
                                <div class="btn-group">
                                    <a href="{{ route('userPayment', $m->id) }}"><button type="button" class="btn btn-success">Book</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><br>
</div>
@endforeach

@endsection
