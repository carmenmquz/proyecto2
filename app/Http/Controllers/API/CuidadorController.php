<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Cuidador;
use Illuminate\Http\Request;
use App\Http\Resources\CuidadorResource;

class CuidadorController extends Controller
{

    /**
     * Create the controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->authorizeResource(Cuidador::class, 'cuidador');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $numElementos = $request->input('numElements');

        $registros = searchByField(array('first_name', 'last_name', 'email', 'direction', 'tlf', 'tarifa', 'valoration'), Cuidador::class);

        return CuidadorResource::collection($registros->paginate($numElementos));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->user()->cannot('create', Cuidador::class)) {
            abort(403);
        }

        $this->authorize('create', Cuidador::class);

        $cuidador = json_decode($request->getContent(), true);

        $cuidador = Cuidador::create($cuidador['data']['attributes']);

        return new CuidadorResource($cuidador);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cuidador  $cuidador
     * @return \Illuminate\Http\Response
     */
    public function show(Cuidador $cuidador)
    {
        return new CuidadorResource($cuidador);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cuidador  $cuidador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cuidador $cuidador)
    {
        if ($request->user()->cannot('update', $cuidador)) {
            abort(403);
        }

        $this->authorize('update', $cuidador);
        $cuidadorData = json_decode($request->getContent(), true);
        $cuidador->update($cuidadorData['data']['attributes']);

        return new CuidadorResource($cuidador);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cuidador  $cuidador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cuidador $cuidador)
    {
        $cuidador->delete();
    }
}
