<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('project', function () {
    return view('project');
});

Route::get('gps', function () {
    return view('gps');
});

Route::get('staff', function () {
    return view('staff');
});

Route::get('contact', function () {
    return view('contact');
});