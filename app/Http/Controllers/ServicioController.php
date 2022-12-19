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

    public function putEdit(Request $request, $id) {
        $cuidador = Cuidador::findOrFail($id);
        $cuidador->dninie = $request->input('dninie');
        $cuidador->especialidad = $request->input('especialidad');
        $cuidador->save();
        $url = action([ServicioController::class, 'getShow'], ['id' => $cuidador->id]);
        return redirect($url);
    }

    public function postCreate(Request $request) {
        $registroNuevo = new Cuidador();
        $registroNuevo->dninie = $request->input('dninie');
        $registroNuevo->especialidad = $request->input('especialidad');
        $registroNuevo->save();
        $url = action([ServicioController::class, 'getIndex']);
        return redirect($url);
    }
}
