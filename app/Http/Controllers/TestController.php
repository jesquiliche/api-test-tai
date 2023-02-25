<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bloque;
use App\Models\Categoria;

class TestController extends Controller
{


public function index()
{
    $bloques = Bloque::all();
    $categorias = Categoria::all();

    return view('test', compact('bloques', 'categorias'));
}
}
