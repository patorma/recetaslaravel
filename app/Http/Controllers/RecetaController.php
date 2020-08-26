<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecetaController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $recetas = ['Receta Pizza', 'Receta Hamburgesa', 'Receta Tacos'];
        $categorias = ['Comida Mexicana', 'Comida Argentina', 'Postres'];
        //carpeta.archivo
        //para pasar la variable con la consulta de bd a la vista se hace con ->with()
        //primera forma
        return view('recetas.index')
            ->with('recetas', $recetas)
            ->with('categorias', $categorias);
        //segunda forma con compact() se pasa variable y valor al mismo tiempo
        // return view('recetas.index', compact('recetas', 'categorias'));
    }
}
