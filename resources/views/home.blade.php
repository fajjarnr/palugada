@extends('layouts.app')

@section('css')
<style>
    /*--------------------------------------------------------------
# Kategori
--------------------------------------------------------------*/
    @import url(https://fonts.googleapis.com/css?family=Raleway);

    *,
    *:before,
    *:after {
        margin: 0;
        padding: 0;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    .main-title {
        color: #2d2d2d;
        text-align: center;
        text-transform: capitalize;
        padding: 0.7em 0;
    }

    .container {
        padding: 1em 0;
        float: left;
        width: 50%;
    }

    @media screen and (max-width: 640px) {
        .container {
            display: block;
            width: 100%;
        }
    }

    @media screen and (min-width: 900px) {
        .container {
            width: 33.33333%;
        }
    }

    .container .title {
        color: #1a1a1a;
        text-align: center;
        margin-bottom: 10px;
    }

    .content {
        position: relative;
        width: 90%;
        max-width: 400px;
        margin: auto;
        overflow: hidden;
    }

    .content .content-overlay {
        background: rgba(0, 0, 0, 0.7);
        position: absolute;
        height: 99%;
        width: 100%;
        left: 0;
        top: 0;
        bottom: 0;
        right: 0;
        opacity: 0;
        -webkit-transition: all 0.4s ease-in-out 0s;
        -moz-transition: all 0.4s ease-in-out 0s;
        transition: all 0.4s ease-in-out 0s;
    }

    .content:hover .content-overlay {
        opacity: 1;
    }

    .content-image {
        width: 100%;
    }

    .content-details {
        position: absolute;
        text-align: center;
        padding-left: 1em;
        padding-right: 1em;
        width: 100%;
        top: 50%;
        left: 50%;
        opacity: 0;
        -webkit-transform: translate(-50%, -50%);
        -moz-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        -webkit-transition: all 0.3s ease-in-out 0s;
        -moz-transition: all 0.3s ease-in-out 0s;
        transition: all 0.3s ease-in-out 0s;
    }

    .content:hover .content-details {
        top: 50%;
        left: 50%;
        opacity: 1;
    }

    .content-details h3 {
        color: #fff;
        font-weight: 500;
        letter-spacing: 0.15em;
        margin-bottom: 0.5em;
        text-transform: uppercase;
    }

    .content-details p {
        color: #fff;
        font-size: 0.8em;
    }

    .fadeIn-bottom {
        top: 80%;
    }

    .fadeIn-top {
        top: 20%;
    }

    .fadeIn-left {
        left: 20%;
    }

    .fadeIn-right {
        left: 80%;
    }

    /*--------------------------------------------------------------
# Footer
--------------------------------------------------------------*/

    #footer {
        background: #000;
        padding: 0 0 30px 0;
        color: #eee;
        font-size: 14px;
    }

    #footer .footer-top {
        background: #111;
        padding: 60px 0 30px 0;
    }

    #footer .footer-top .footer-info {
        margin-bottom: 30px;
    }

    #footer .footer-top .footer-info h3 {
        font-size: 34px;
        margin: 0 0 20px 0;
        padding: 2px 0 2px 10px;
        line-height: 1;
        font-family: "Montserrat", sans-serif;
        font-weight: 700;
        letter-spacing: 3px;
        border-left: 4px solid #18d26e;
    }

    #footer .footer-top .footer-info p {
        font-size: 14px;
        line-height: 24px;
        margin-bottom: 0;
        font-family: "Montserrat", sans-serif;
        color: #eee;
    }

    #footer .footer-top .social-links a {
        font-size: 18px;
        display: inline-block;
        background: #333;
        color: #eee;
        line-height: 1;
        padding: 8px 0;
        margin-right: 4px;
        border-radius: 50%;
        text-align: center;
        width: 36px;
        height: 36px;
        transition: 0.3s;
    }

    #footer .footer-top .social-links a:hover {
        background: #18d26e;
        color: #fff;
    }

    #footer .footer-top h4 {
        font-size: 14px;
        font-weight: bold;
        color: #fff;
        text-transform: uppercase;
        position: relative;
        padding-bottom: 12px;
    }

    #footer .footer-top h4::before,
    #footer .footer-top h4::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        height: 2px;
    }

    #footer .footer-top h4::before {
        right: 0;
        background: #555;
    }

    #footer .footer-top h4::after {
        background: #18d26e;
        width: 60px;
    }

    #footer .footer-top .footer-links {
        margin-bottom: 30px;
    }

    #footer .footer-top .footer-links ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    #footer .footer-top .footer-links ul i {
        padding-right: 8px;
        color: #ddd;
    }

    #footer .footer-top .footer-links ul li {
        border-bottom: 1px solid #333;
        padding: 10px 0;
    }

    #footer .footer-top .footer-links ul li:first-child {
        padding-top: 0;
    }

    #footer .footer-top .footer-links ul a {
        color: #eee;
    }

    #footer .footer-top .footer-links ul a:hover {
        color: #18d26e;
    }

    #footer .footer-top .footer-contact {
        margin-bottom: 30px;
    }

    #footer .footer-top .footer-contact p {
        line-height: 26px;
    }

    #footer .footer-top .footer-newsletter {
        margin-bottom: 30px;
    }

    #footer .footer-top .footer-newsletter input[type="email"] {
        border: 0;
        padding: 6px 8px;
        width: 65%;
    }

    #footer .footer-top .footer-newsletter input[type="submit"] {
        background: #18d26e;
        border: 0;
        width: 35%;
        padding: 6px 0;
        text-align: center;
        color: #fff;
        transition: 0.3s;
        cursor: pointer;
    }

    #footer .footer-top .footer-newsletter input[type="submit"]:hover {
        background: #13a456;
    }

    #footer .copyright {
        text-align: center;
        padding-top: 30px;
    }

    #footer .credits {
        text-align: center;
        font-size: 13px;
        color: #ddd;
    }
</style>
@endsection

@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{asset('img/a.jpeg')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{asset('img/b.jpeg')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{asset('img/c.jpeg')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{asset('img/d.jpeg')}}" class="d-block w-100" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<br><br>

<div class="center text-center">
    <h1>Kategori</h1>
    <p class="center text-center">Kami memberikan pelayanan dengan sepenuh hati untuk menjaga kualitas dan kepercayaan pengguna Palugada.</p>
</div>

@foreach ($data as $d)
<div class="container">
    <div class="content">
        <a href="{{ $d->url }}">
            <div class="content-overlay"></div>
            <img class="content-image" src="{{ url('/data_file/'.$d->image) }}">
            <div class="content-details fadeIn-top">
                <h3>{{ $d->nama_kategori }}</h3>
                <p>{{ $d->deskripsi }}</p>
            </div>
        </a>
    </div>
</div>
@endforeach

@endsection
