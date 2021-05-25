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

Route::get('variables' ,function(){
    $mensaje = 20;

    // funcion nativa de php: analizar el contenido de una variable
    // variable: tipo de dato, atos contenidos.
    var_dump($mensaje);
    echo "<hr />";
    $mensaje =" Hola mi gente";
    var_dump($mensaje);
});

Route::get("arreglos" , function(){

    // definir un arreglo en php
    //tamaño: numero de elementos del arreglo
    // el tamaño del arreglo estudiantes es 3
    $estudiantes = [  "Ana", "Daniel",  "Brayan"];
    echo "<pre>";
    var_dump($estudiantes);
    echo "</pre>";
} );

Route::get('paises', function(){

    $paises =  [
        "Colombia" => [
                 "capital" => "Bogota",
                 "moneda" => "peso",
                 "poblacion" => 51
        ],
        "Japon" => [
            "capital" => "Tokio",
            "moneda" => "Yen japonés",
            "poblacion" => 126,3
        ],
       "Australia" =>[
        "capital" => "canberra",
        "moneda" => "dolar australiano",
        "poblacion" => 25,36

       ]
   ];

   //mostrar la vista de paises.

   return view('paises')->with('naciones', $paises);


   /*echo "<pre>";//mostrar en pantalla
   print_r($paises);//imprime el arreglo
   echo "</pre>";*/

   //recorrer el arreglo  de paises

    foreach ($paises as $indice => $valor){
        echo "$indice";
        echo "<pre>";
        echo ($valor["capital"]);
        echo "</pre>";
        echo "<hr />";


    }


});

Route::get ('mostrar_formulario' , 'MetabuscadorController@mostrar_formulario');

Route::post ('buscar_termino', 'MetabuscadorController@buscar_termino');
