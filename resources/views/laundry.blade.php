@extends('layouts.app')

@section('title')
Laundry
@endsection

@section('content')

@foreach ($laundry as $l)
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-12 shadow-sm">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img class="card-img-top" width="100%" height="250"
                                src="{{ url('/data_file/'.$l->image) }}">
                        </div>
                        <div class="col-md-8">
                        <h4><b>{{ $l->nama_jasa}}</b></h4>
                            <p class="card-text">{{ $l->slogan }}</p>
                            <h5>Deskripsi :</h5>
                            <p class="card-text">{{ $l->deskripsi}}</p>
                            <p><b>Alamat :</b>{{ $l->alamat}}</p>
                            <p><b>No Tlp/Hp : </b>{{ $l->notlp}}</p>
                            <p><b>Email : </b>{{ $l->email}}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <p><b>Harga : </b>Rp.{{ $l->harga }}</p>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-success">Book</button>
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
