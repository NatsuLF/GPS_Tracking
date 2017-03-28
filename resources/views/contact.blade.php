
@extends('layouts.master')

@section('title', 'Contacto')

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
      <h2 class="text-center"><strong>UBIMOV - Seguimiento y Monitorización GPS</strong></h2>
      <p class="text-center">Estamos para servirle si tiene alguna pregunta
      no dude en contactarnos, con gusto le atenderemos.</p>
    </div>
  </div>
</div>

<div class="col-md-3"></div>

<div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-body">
            <form>
              <div class="form-group">
                <label for="name">Nombre</label>
                <input type="tetx" class="form-control" id="name">
              </div>
              <div class="form-group">
                <label for="mail">Correo</label>
                <input type="email" class="form-control" id="mail">
              </div>
              <div class="form-group">
                  <label for="msj">Mensaje</label>
                  <textarea class="form-control" name="msj" id="msj"></textarea>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary pull-right">
                    Enviar
                    <i class="fa fa-paper-plane-o fa-lg" aria-hidden="true"></i>
                </button>
              </div>
            </form>
        </div>
    </div>
</div>

<div class="col-md-3"></div>
@endsection

@section('javascript')
    <script src="{{ asset('components/jquery/dist/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('components/bootstrap/dist/js/bootstrap.min.js') }}" type="text/javascript"></script>
@endsection