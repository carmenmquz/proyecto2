<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicioController extends Controller
{
    public function getIndex() {
        return view('servicios.index');
    }

    public function getShow($id) {
    return view('servicios.show', array('id'=>$id));
    }

    public function getCreate() {
        return view('servicios.create');
    }

    public function getEdit($id) {
            return view('servicios.edit', array('id'=>$id));
    }


/*private $arrayServicios = array(
    array(
        'nombre' => 'Guardería 1',
        'precio' => '20',
        'categoria' => 'empresa',
        'imagen' => '',
        'descripcion' => 'Guardería en el centro de Cartagena.'
    ),
    array(
        'nombre' => 'Autónomo 1',
        'precio' => '10',
        'categoria' => 'particular',
        'imagen' => '',
        'descripcion' => 'Se desplaza.'
    )
);*/
}
