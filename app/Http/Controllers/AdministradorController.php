<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministradorController extends Controller
{
   /* public function __construct()
    {
        $this->middleware('EsAdmin');
    }*/

    public function index()
    {
       //return "eres un administrador... estas a cargo del sistema";
       return view('inicio');
    }

}
