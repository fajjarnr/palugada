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
                            <p class="card-text">{{ $s->deskripsi}}</p>
                            <p>{{ $s->alamat}}</p>
                            <p>{{ $s->notlp}}</p>
                            <p>{{ $s->email}}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <p>Harga Rp.{{ $s->harga }}</p>
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
