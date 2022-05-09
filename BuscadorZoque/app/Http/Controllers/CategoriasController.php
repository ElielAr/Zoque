<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    //
    public function index(){
        return view ('categorias/numeros');
    }

    public function cuerpo(){
        return view ('categorias/cuerpo');
    }

    public function familiar(){
        return view('categorias.familiar');
    }

    public function saludos(){
        return view('categorias.saludos');
    }

    public function alfabeto(){
        return view('categorias.alfabeto');
    }

    public function vocabulario(){
        return view('categorias.vocabulario');
    }

    public function verbos(){
        return view('categorias.verbos');
    }

    public function frutasverduras(){
        return view('categorias.frutasverduras');
    }
    public function animales(){
        return view('categorias.animales');
    }
}
