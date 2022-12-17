<?php

namespace App\Http\Controllers;

use App\Models\Cuidador;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    public function getIndex() {
        $cuidadores = Cuidador::all();
        return view('servicios.index', ['cuidadores' => $cuidadores]);
    }

    public function getShow($id) {
        $cuidador = Cuidador::findOrFail($id);
        return view('servicios.show', ['cuidador' => $cuidador]);
    }

    public function getCreate() {
        return view('servicios.create');
    }

    public function getEdit($id) {
        $cuidador = Cuidador::findOrFail($id);
        return view('servicios.edit', ['id' => $id, 'cuidador' => $cuidador]);
    }
}
