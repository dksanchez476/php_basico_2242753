<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MetabuscadorController extends Controller
{
    //controlador esta compuesto de acciones
    // cada accion estara vinculada a su correspondiente  ruta

    public function mostrar_formulario(){

        //mostrar la vista del metabuscador
        return view('metabuscador');

    }

    //realizar la busqueda por motor
    public function buscar_termino(){
        // realizar busqueda
        $termino = $_POST["termino"];
        $motor = $_POST["motores"];

        //la busqyeda se realiaza acorde al mmotor
        // de busqueda elegido
    switch ($motor){
     //redirect,- to metodos de laravel para redireccionar
        case 1: return redirect()->to("https://www.google.com/search?q=$termino");
            break;
        case 2: return redirect()->to("https://www.bing.com/search?q=$termino");
            break;
        case 3: return redirect()->to("https://yandex.com/search/?text=$termino");
                break;
        case 4: return redirect()->to("https://espanol.search.yahoo.com/search?p=$termino");
                break;
        case 5: return redirect()->to("https://search.naver.com/search.naver?where=nexearch&sm=top_hty&fbm=1&ie=utf8&query=$termino");
                    break;
        case 6: return redirect()->to("https://www.ecosia.org/search?q=$termino");
                    break;
        case 7: return redirect()->to("https://www.youtube.com/results?search_query=$termino");
                    break;
        case 8: return redirect()->to("https://search.seznam.cz/?q=$termino");
                    break;
        case 9: return redirect()->to("https://www.qwant.com/?l=es&q=$termino");
                    break;
        case 10: return redirect()->to("https://search.daum.net/search?w=tot&DA=YZR&t__nil_searchbox=btn&sug=&sugo=&sq=&o=&q=$termino");
                    break;

    }

    }
}
