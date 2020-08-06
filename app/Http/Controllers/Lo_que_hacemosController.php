<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Lo_que_hacemosController extends Controller
{
    public function proyecto()
    {
        $datos = 'proyecto';
        return view('paginas/lo_que_hacemos/informacion',compact('datos'));
    }
    public function voluntariado()
    {
        $datos = 'voluntariado';
        return view('paginas/lo_que_hacemos/informacion',compact('datos'));
    }
    public function proyectos_tipo()
    {
        $datos = 'proyecto';
        return view('paginas/lo_que_hacemos/proyectos',compact('datos'));
    }
    public function voluntariado_tipo()
    {
        $datos = 'voluntariado';
        return view('paginas/lo_que_hacemos/voluntariado',compact('datos'));
    }
}
