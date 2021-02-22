<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Alumno2Controller extends Controller
{
     /* public function __construct()
    {
        $this->middleware('EsAdmin');
    }*/


    public function index()
    {
       //return "eres un administrador... estas a cargo del sistema";
       return view('inicioAlumnos');
    }
}
