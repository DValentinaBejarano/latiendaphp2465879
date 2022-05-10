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
//get : mostrar por el navegador, metodo de la clase Route
//paremetros: 1, nombre de la ruta

Route::get('paises', function(){
    $paises=[
        "Colombia"=> [
        "Capital"=> "Bogota",
        "moneda"=> "Peso",
        "poblacion"=> "51.6",
        "ciudades" => [
            "Medellín",
            "Cali",
            "Barranquilla"
        ]
    ],

        "Peru"=> [
        "Capital"=> "Lima",
        "moneda"=>"Sol",
        "poblacion"=> "32.97",
        "ciudades" => [
            "Ica",
            "Cusco",
            "Chiclayo"
        ]
    ],

        "Paraguay"=>[
        "Capital"=> "Asuncion",
        "moneda"=> "Guarani paraguayo",
        "poblacion"=>"7.133",
        "ciudades" => [
            "Boquerón",
            "Caaguazú",
            "Caazapa"
        ]
      ]
    ];
  
//Mostrar en la vista 
return view('paises')
->with("paises" , $paises);


});

route::get('prueba', function(){
return view('productos.new');
});


