<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PALUGADA | Selamat Datang</title>
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/fontawesome.min.css')}}">
</head>
<body class="text-center">

    <video autoplay muted loop id="myVideo">
        <source src="{{asset('video/cs.mp4')}}" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
 <div class="content">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="masthead mb-auto">
          <div class="inner">
            <h3 class="masthead-brand">PALUGADA</h3>
            <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link" href="{{ route('login') }}">Login</a>
            <a class="nav-link" href="{{ route('register') }}">Register</a>
            </nav>
          </div>
        </header>

        <main role="main" class="inner cover">
          <h1 class="cover-heading">PALUGADA</h1>
          <p class="lead">Palugada merupakan penyedia jasa yang bermitra dengan berbagai
              pelayanan jasa terbaik di seluruh Indonesia. Didukung dengan teknologi terkini,
              kami memberikan pelayanan jasa terbaik dengan harga terjangkau.
          </p>

          <p class="lead">
            <a href="{{ url('/login') }}" class="btn btn-lg btn-success">Selengkapnya</a>
          </p>

        </main>

        <footer class="mastfoot mt-auto">
          <div class="inner">
            <p>&copy Copyright <a href="{{ url('/') }}">Palugada</a> 2019</a>.</p>
          </div>
        </footer>
    </div>
 </div>

    <script src="{{ asset('js/jquery-3.3.1.slim.min.js')}}"></script>
    <script src="{{ asset('js/popper.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>
