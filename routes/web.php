<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/miPrimeraRuta', function (){
    return "Creé mi primier Laravel";
});
Route::get('/esPar/{numero}', function ($numero){
    return $numero % 2 == 0 ? "es par" : "es impar" ;
});
Route::get('/sumar/{sumando1}/{sumando2}/{sumando3?}', function ($sumando1, $sumando2, $sumando3 = 0){
    return $sumando1 + $sumando2 + $sumando3;
});
Route::get('/peliculas', function (){
    $peliculas = [];
    return view ('peliculas', compact('peliculas'));
     // return view ('plantilla')->with('peliculas', $peliculas);
});
