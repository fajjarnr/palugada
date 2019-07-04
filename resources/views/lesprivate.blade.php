@extends('layouts.app')

@section('title')
Les Private
@endsection

@section('content')

@foreach ($lesprivate as $lp)
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-12 shadow-sm">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img class="card-img-top" width="100%" height="250"
                                src="{{ url('/data_file/'.$lp->image) }}">
                        </div>
                        <div class="col-md-8">
                        <h4><b>{{ $lp->nama_jasa}}</b></h4>
                            <p class="card-text">{{ $lp->slogan }}</p>
                            <p class="card-text">{{ $lp->deskripsi}}</p>
                            <p>{{ $lp->alamat}}</p>
                            <p>{{ $lp->notlp}}</p>
                            <p>{{ $lp->email}}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <p>Harga Rp.{{ $lp->harga }}</p>
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
