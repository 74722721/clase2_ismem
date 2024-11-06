<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HolaController extends Controller
{
    public function index()
    {
        return view('bienvenido');
    }

    public function contactos()
    {
        return view('contacto');
    }
}
