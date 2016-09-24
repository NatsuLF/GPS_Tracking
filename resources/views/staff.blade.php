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
  <div class="staff">
        <div class="col-md-3"></div>
          <div class="col-md-3">
              <div class="thumbnail img-responsive">
                <img src="img/11891052_960788797311068_5832740305674622057_n.jpg" alt="">
                <div class="caption">
                  <h3>Leonel Barrera Rivas <small>Developer, Web Disigner, TI Admin</small></h3>
                    <p>
                      <a class="social btn" href="{{ url('https://www.facebook.com') }}" target="_blank">
                        <i class="fa fa-facebook fa-lg" aria-hidden="true"></i>
                      </a>
                      <a class="social btn" href="{{ url('https://plus.google.com') }}" target="_blank">
                        <i class="fa fa-google-plus fa-lg" aria-hidden="true"></i>
                      </a>
                      <a class="social btn" href="{{ url('https://github.com') }}" target="_blank">
                        <i class="fa fa-github fa-lg" aria-hidden="true"></i>
                      </a>
                    </p>
                </div>
              </div>
          </div>
          <div class="col-md-3">
              <div class="thumbnail img-responsive">
                <img src="img/14238120_10206765726674023_6075101334071874463_n.jpg" alt="">
                <div class="caption">
                  <h3>Norman Guido Ruiz <small>Developer,TI Admin, Arduino Maker</small></h3>
                    <p>
                      <a class="social btn" href="{{ url('https://www.facebook.com') }}" target="_blank">
                        <i class="fa fa-facebook fa-lg" aria-hidden="true"></i>
                      </a>
                      <a class="social btn" href="{{ url('https://plus.google.com') }}" target="_blank">
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
  </div>
@endsection

@section('javascript')
    <script src="{{ asset('components/jquery/dist/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('components/bootstrap/dist/js/bootstrap.min.js') }}" type="text/javascript"></script>
@endsection