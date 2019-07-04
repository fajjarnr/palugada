@extends('layouts.app')

@section('title')
Home Cleaner
@endsection

@section('content')

@foreach ($homecleaner as $e)
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
                            <p class="card-text">{{ $e->deskripsi}}</p>
                            <p>{{ $e->alamat}}</p>
                            <p>{{ $e->notlp}}</p>
                            <p>{{ $e->email}}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <p>Harga Rp.{{ $e->harga }}</p>
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
