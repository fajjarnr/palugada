@extends('layouts.app')

@section('title')
Massage
@endsection

@section('content')

@foreach ($Massage as $m)
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
                            <p class="card-text">{{ $m->deskripsi}}</p>
                            <p>{{ $m->alamat}}</p>
                            <p>{{ $m->notlp}}</p>
                            <p>{{ $m->email}}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <p>Harga Rp.{{ $m->harga }}</p>
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
