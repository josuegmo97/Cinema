<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
    function index()
    {
        return "Hola desde el controlador";
    }

    function nombre($nombre)
    {
        return "El nombre es . $nombre";
    }
}
