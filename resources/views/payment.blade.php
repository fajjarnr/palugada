<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PALUGADA</title>
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="form-validation.css">
</head>

<body>

    <br>
    <div class="container">
        <h1 class="text-center m-auto">Pembayaran</h1>
    </div>

    <div class="container">
        <!-- Main content -->
        <div class="invoice p-3 mb-3">
            <br><br>
            <!-- Table row -->
            <div class="row">
                <div class="col-12 table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>email</th>
                                <th>jasa</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ auth()->user()->name }} </td>
                                <td>{{ auth()->user()->email }} </td>
                                @foreach ($data as $data)
                                <td> {{ $data->nama_jasa }} </td>
                                <td> {{ $data->harga }} </td>
                                @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <div class="row">
                <!-- accepted payments column -->
                <div class="col-6">
                    <p class="lead">Metode Pembayaran : </p>
                    <img width="10%" src="{{ asset('img/payment/logo-bca.png') }}">
                    <img width="10%" src="{{ asset('img/payment/logo-bri.png') }}">
                    <img width="10%" src="{{ asset('img/payment/logo-bni.png') }}">
                    <img width="10%" src="{{ asset('img/payment/logo-mandiri.jpg') }}">
                    <img width="10%" src="{{ asset('img/payment/logo-alfamart.png') }}">
                    <img width="10%" src="{{ asset('img/payment/logo-Indomaret.png') }}">
                </div>
            </div>
            <!-- /.row -->

            <!-- this row will not appear when printing -->
            <div class="col-12">
                <button type="button" class="btn btn-success float-right">Bayar</button>
            </div>
        </div>
        <!-- /.invoice -->
    </div>

</body>

</html>
