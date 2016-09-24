@extends('layouts.master')

@section('title', 'Inicio')

@section('css')
    <link rel="stylesheet" href="{{ asset('components/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('components/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
@endsection

@section('navbar')
    @include('shared.navbar')

@section('content')
    <div class="container-fluid">
        <div class="col-md-8">
            <iframe
                src="https://embed.ted.com/talks/lang/es/massimo_banzi_how_arduino_is_open_sourcing_imagination"
                width="854"
                height="530"
                frameborder="0"
                scrolling="no"
                webkitAllowFullScreen mozallowfullscreen allowFullScreen>
            </iframe>
        </div>
        <div class="col-md-4">
            <div class="well well-lg">
                <h4>
                    Massimo Banzi helped invent the Arduino, a tiny, easy-to-use open-source
                    microcontroller that's inspired thousands of people around the world to
                    make the coolest things they can imagine — from toys to satellite gear.
                    Because, as he says, <strong>"You don't need anyone's permission to make
                    something great."</strong>
                </h4>
            </div>
            <div class="well well-lg">
                <img src="img/logo_arduino.jpg" alt="Arduino-IDE">
            </div>
        </div>
    </div>

@endsection

@section('javascript')
    <script src="{{ asset('components/jquery/dist/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('components/bootstrap/dist/js/bootstrap.min.js') }}" type="text/javascript"></script>
@endsection


