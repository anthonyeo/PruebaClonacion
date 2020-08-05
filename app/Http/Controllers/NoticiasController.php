<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticiasController extends Controller
{
    public function noticias_tipo()
    {
        $datos = 'voluntariado';
        return view('paginas/noticias/noticias_listado',compact('datos'));
    }
    public function eventos_tipo()
    {
        $datos = 'voluntariado';
        return view('paginas/noticias/eventos_listado',compact('datos'));
    }
    public function publicaciones_tipo()
    {
        $datos = 'voluntariado';
        return view('paginas/noticias/publicaciones_listado',compact('datos'));
    }
    public function noticias_info($tipo, $id)
    {
        $datos = $tipo;
        return view('paginas/noticias/noticias',compact('datos'));
    }
}
