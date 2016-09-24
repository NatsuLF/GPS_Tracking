@extends('layouts.master')

@section('title', 'Demo GPS-Tracking')

@section('css')
    <link rel="stylesheet" href="{{ asset('components/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('components/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
@endsection

@section('navbar')
    @include('shared.navbar')

@section('content')

@endsection

@section('javascript')
    <script src="{{ asset('components/jquery/dist/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('components/bootstrap/dist/js/bootstrap.min.js') }}" type="text/javascript"></script>
@endsection