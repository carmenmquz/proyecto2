<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cuidador;
use App\Http\Resources\CuidadorResource;

class CuidadorController extends Controller
{
    public function index(Request $request)
    {
        $busqueda = $request->input('filter');
        $numElementos = $request->input('numElements');
        $registrosCuidadores =
            ($busqueda && array_key_exists('q', $busqueda))
            ? Cuidador::where('name', 'like', '%' .$busqueda['q'] . '%')
                ->paginate($numElementos)
            : Cuidador::paginate($numElementos);

            return CuidadorResource::collection($registrosCuidadores);
    }

    public function store(Request $request)
    {
        $cuidador = json_decode($request->getContent(), true);
        $cuidadorData = $cuidador['data']['attributes'];

        $cuidador = Cuidador::create($cuidadorData);

        return new CuidadorResource($cuidador);
    }


    public function show(Cuidador $cuidador)
    {
        return new CuidadorResource($cuidador);
    }


    public function update(Request $request, Cuidador $cuidador)
    {
        $cuidadorData = json_decode($request->getContent(), true);
        $cuidador->update($cuidadorData['data']['attributes']);

        return new CuidadorResource($cuidador);
    }


    public function destroy(Cuidador $cuidador)
    {
        $cuidador->delete();
    }
}
