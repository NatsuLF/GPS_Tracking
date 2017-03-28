@extends('layouts.master')

@section('title', 'Staff')

@section('css')
    <link rel="stylesheet" href="{{ asset('components/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('components/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
@endsection

@section('navbar')
    @include('shared.navbar')

@section('content')
<div class="container">
  <div class="jumbotron">
    <div class="container">
      <h2 class="text-center"><strong>Nuestro equipo de trabajo - UBIMOV</strong></h2>
    </div>
  </div>
</div>

<div class="col-md-3"></div>

<div class="col-md-2">
  <div class="thumbnail img-responsive">
    <img src="img/11891052_960788797311068_5832740305674622057_n.jpg" alt="">
    <div class="caption text-center">
      <h3>Leonel Barrera Rivas <br><small>Developer, Web Disigner, TI Admin</small></h3>
        <p>
          <a class="social btn" href="{{ url('https://www.facebook.com/barrerarivas') }}" target="_blank">
            <i class="fa fa-facebook fa-lg" aria-hidden="true"></i>
          </a>
          <a class="social btn" href="{{ url('https://plus.google.com/u/0/103703665849184543525') }}" target="_blank">
            <i class="fa fa-google-plus fa-lg" aria-hidden="true"></i>
          </a>
          <a class="social btn" href="{{ url('https://github.com/NatsuLF') }}" target="_blank">
            <i class="fa fa-github fa-lg" aria-hidden="true"></i>
          </a>
        </p>
    </div>
  </div>
</div>

<div class="col-md-2">
  <div class="thumbnail img-responsive">
    <img src="img/14238120_10206765726674023_6075101334071874463_n.jpg" alt="">
    <div class="caption text-center">
      <h3>Norman Guido Ruiz <br><small>Developer,TI Admin, Arduino Maker</small></h3>
        <p>
          <a class="social btn" href="{{ url('https://www.facebook.com/npgdreamer') }}" target="_blank">
            <i class="fa fa-facebook fa-lg" aria-hidden="true"></i>
          </a>
          <a class="social btn" href="{{ url('https://plus.google.com/u/0/104943500790322707391') }}" target="_blank">
            <i class="fa fa-google-plus fa-lg" aria-hidden="true"></i>
          </a>
          <a class="social btn" href="{{ url('https://github.com') }}" target="_blank">
            <i class="fa fa-github fa-lg" aria-hidden="true"></i>
          </a>
        </p>
    </div>
  </div>
</div>

<div class="col-md-2">
  <div class="thumbnail img-responsive">
    <img src="img/FB_IMG_1490728926947.jpg" alt="">
    <div class="caption text-center">
      <h3>Engell Alexis Mejia <br><small>MS Developer, Web Designer, TI Admin</small></h3>
        <p>
          <a class="social btn" href="{{ url('https://www.facebook.com/engell93d?ref=ts&fref=ts') }}" target="_blank">
            <i class="fa fa-facebook fa-lg" aria-hidden="true"></i>
          </a>
          <a class="social btn" href="{{ url('https://plus.google.com/113888268936926155270') }}" target="_blank">
            <i class="fa fa-google-plus fa-lg" aria-hidden="true"></i>
          </a>
          <a class="social btn" href="{{ url('https://github.com') }}" target="_blank">
            <i class="fa fa-github fa-lg" aria-hidden="true"></i>
          </a>
        </p>
    </div>
  </div>
</div>

<div class="col-md-3"></div>

@endsection

@section('javascript')
    <script src="{{ asset('components/jquery/dist/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('components/bootstrap/dist/js/bootstrap.min.js') }}" type="text/javascript"></script>
@endsection