<?php

use Illuminate\Support\Facades\Route;

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

//primera ruta
// get : mostrar por el navegador, metodo de la clase Route
//paremetros: 1, nombre de la ruta

Route::get('hola', function(){ echo "mi primera ruta en php"; });

