<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Menor;
use Illuminate\Http\Request;
use App\Http\Resources\MenorResource;

class MenorController extends Controller
{

    /**
     * Create the controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->authorizeResource(Menor::class, 'menor');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $numElementos = $request->input('numElements');

        $registros = searchByField(array('first_name', 'last_name', 'email', 'direction', 'tlf', 'valoration'), Menor::class);

        return MenorResource::collection($registros->paginate($numElementos));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->user()->cannot('create', Menor::class)) {
            abort(403);
        }

        $this->authorize('create', Menor::class);

        $menor = json_decode($request->getContent(), true);

        $menor = Menor::create($menor['data']['attributes']);

        return new MenorResource($menor);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Menor  $menor
     * @return \Illuminate\Http\Response
     */
    public function show(Menor $menor)
    {
        return new MenorResource($menor);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menor  $menor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menor $menor)
    {
        if ($request->user()->cannot('update', $menor)) {
            abort(403);
        }

        $this->authorize('update', $menor);
        $menorData = json_decode($request->getContent(), true);
        $menor->update($menorData['data']['attributes']);

        return new MenorResource($menor);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menor  $menor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menor $menor)
    {
        $menor->delete();
    }
}
