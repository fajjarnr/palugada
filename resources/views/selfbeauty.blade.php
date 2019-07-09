@extends('layouts.app')

@section('title')
Self Bauty
@endsection

@section('content')

@foreach ($selfbeauty as $s)
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-12 shadow-sm">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img class="card-img-top" width="100%" height="250"
                                src="{{ url('/data_file/'.$s->image) }}">
                        </div>
                        <div class="col-md-8">
                        <h4><b>{{ $s->nama_jasa}}</b></h4>
                            <p class="card-text">{{ $s->slogan }}</p>
                            <h5>Deskripsi :</h5>
                            <p class="card-text">{{ $s->deskripsi}}</p>
                            <p><b>Alamat : </b>{{ $s->alamat}}</p>
                            <p><b>No Tlp/Hp : </b>{{ $s->notlp}}</p>
                            <p><b>Email : </b>{{ $s->email}}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <p><b>Harga : </b>Rp.{{ $s->harga }}</p>
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
