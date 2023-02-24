<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menor;
use App\Http\Resources\MenorResource;

class MenorController extends Controller
{
    public function index(Request $request)
    {
        $numElementos = $request->input('numElements');

        $registrosMenores = searchByField(array('name', 'email'), Menor::class);

        return MenorResource::collection($registrosMenores->paginate($numElementos));
    }

    public function store(Request $request)
    {
        $menor = json_decode($request->getContent(), true);
        $menorData = $menor['data']['attributes'];

        $menor = Menor::create($menorData);

        return new MenorResource($menor);
    }


    public function show(Menor $menor)
    {
        return new MenorResource($menor);
    }


    public function update(Request $request, Menor $menor)
    {
        $menorData = json_decode($request->getContent(), true);
        $menor->update($menorData['data']['attributes']);

        return new MenorResource($menor);
    }


    public function destroy(Menor $menor)
    {
        $menor->delete();
    }
}
