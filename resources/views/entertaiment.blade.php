@extends('layouts.app')

@section('title')
Entertaiment
@endsection

@section('content')

@foreach ($entertaiment as $e)
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-12 shadow-sm">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img class="card-img-top" width="100%" height="250"
                                src="{{ url('/data_file/'.$e->image) }}">
                        </div>
                        <div class="col-md-8">
                        <h4><b>{{ $e->nama_jasa}}</b></h4>
                            <p class="card-text">{{ $e->slogan }}</p>
                            <h5>Deskripsi :</h5>
                            <p class="card-text">{{ $e->deskripsi}}</p>
                            <p><b>Alamat :</b> {{ $e->alamat}}</p>
                            <p><b>No Tlp/Hp : </b>{{ $e->notlp}}</p>
                            <p><b>Email : </b>{{ $e->email}}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <p><b>Harga : </b> Rp.{{ $e->harga }}</p>
                                <div class="btn-group">
                                    <a href="{{ route('userPayment', $e->id) }}"><button type="button" class="btn btn-success">Book</button></a>
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
