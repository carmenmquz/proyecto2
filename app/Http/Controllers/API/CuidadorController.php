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
        $numElementos = $request->input('numElements');

        $registrosCuidadores = searchByField(array('name', 'email'), Cuidador::class);

        return CuidadorResource::collection($registrosCuidadores->paginate($numElementos));
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
