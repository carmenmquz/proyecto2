<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contratacion;
use App\Http\Resources\ContratacionResource;

class ContratacionController extends Controller
{
    public function index(Request $request)
    {
        $numElementos = $request->input('numElements');

        $registrosContrataciones = searchByField(array('name'), Contratacion::class);

        return ContratacionResource::collection($registrosContrataciones->paginate($numElementos));
    }

    public function store(Request $request)
    {
        $contratacion = json_decode($request->getContent(), true);
        $contratacionData = $contratacion['data']['attributes'];

        $contratacion = Contratacion::create($contratacionData);

        return new ContratacionResource($contratacion);
    }


    public function show(Contratacion $contratacion)
    {
        return new ContratacionResource($contratacion);
    }


    public function update(Request $request, Contratacion $contratacion)
    {
        $contratacionData = json_decode($request->getContent(), true);
        $contratacion->update($contratacionData['data']['attributes']);

        return new ContratacionResource($contratacion);
    }


    public function destroy(Contratacion $contratacion)
    {
        $contratacion->delete();
    }
}
