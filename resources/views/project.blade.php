@extends('layouts.master')

@section('title', 'Proyecto')

@section('css')
    <link rel="stylesheet" href="{{ asset('components/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('components/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
@endsection

@section('navbar')
    @include('shared.navbar')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h1>Modulo GPS Tracking Open Source</h1>
                    <p class="text-justify">GPS, o Sistema de Posicionamiento Global (Global Positioning System) es un sistema de navegación basado en satélites y está integrado por 24 satélites puestos en órbita por el Departamento de defensa de los Estados Unidos. Originalmente, fue pensado para aplicaciones militares, aunque a partir de los años 80's el gobierno de USA puso el sistema de navegación disponible a la población civil.
                    </p>
                    <p class="text-justify">Arduino es una plataforma de hardware de código abierto, basada en una sencilla placa con entradas y salidas, analógicas y digitales, en un entorno de desarrollo que está basado en el lenguaje de programación Processing.
                    Sus creadores son el zaragozano David Cuartielles, ingeniero electrónico y docente de la Universidad de Mälmo, Suecia y Massimo Banzi, italiano, diseñador y desarrollador Web. El proyecto fue concebido en Italia en el año 2005.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-3">
                <div class="thumbnail img-responsive">
                  <img src="img/ArduinoUnoFront240.jpg" alt="">
                  <div class="caption">
                    <h3>Arduino Uno Genuine</h3>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#arduino">
                          Saber mas
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="arduino" tabindex="-1" role="dialog" aria-labelledby="arduino">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Arduino UNO Genuine</h4>
                              </div>
                              <div class="modal-body">
                                <p>
                                The UNO is the best board to get started with
                                electronics and coding. If this is your first
                                experience tinkering with the platform, the
                                UNO is the most robust board you can start
                                playing with. The UNO is the most used and
                                documented board of the whole Arduino &
                                Genuino family.
                                </p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                <a href="{{ url('https://www.arduino.cc/en/Main/ArduinoBoardUno') }}" class="btn btn-primary" target="_blank">Ir a la web</a>
                              </div>
                            </div>
                          </div>
                        </div>
                  </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="thumbnail img-responsive">
                  <img src="img/HTB1.4OHJFXXXXacXpXXq6xXFXXXO.jpg" alt="">
                  <div class="caption">
                    <h3>SIM808 GPS Module</h3>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#sim808">
                          Saber mas
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="sim808" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">SIM808 GPS Module</h4>
                              </div>
                              <div class="modal-body">
                                <p>
                                SIM808 module is a GSM and GPS two-in-one function module. It is based on the latest GSM/GPS
                                module SIM808 from SIMCOM, supports GSM/GPRS Quad-Band network and combines GPS
                                technology for satellite navigation.
                                </p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                <a href="{{ url('https://www.itead.cc/wiki/SIM808_GSM/GPRS/GPS_Module') }}" class="btn btn-primary" target="_blank">Ir a la web</a>
                              </div>
                            </div>
                          </div>
                        </div>
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


