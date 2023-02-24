<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tutor;
use App\Http\Resources\TutorResource;

class TutorController extends Controller
{
    public function index(Request $request)
    {
        $busqueda = $request->input('filter');
        $numElementos = $request->input('numElements');
        $registrosTutores =
            ($busqueda && array_key_exists('q', $busqueda))
            ? Tutor::where('name', 'like', '%' .$busqueda['q'] . '%')
                ->paginate($numElementos)
            : Tutor::paginate($numElementos);

            return TutorResource::collection($registrosTutores);
    }

    public function store(Request $request)
    {
        $tutor = json_decode($request->getContent(), true);
        $tutorData = $tutor['data']['attributes'];

        $tutor = Tutor::create($tutorData);

        return new TutorResource($tutor);
    }


    public function show(Tutor $tutor)
    {
        return new TutorResource($tutor);
    }


    public function update(Request $request, Tutor $tutor)
    {
        $tutorData = json_decode($request->getContent(), true);
        $tutor->update($tutorData['data']['attributes']);

        return new TutorResource($tutor);
    }


    public function destroy(Tutor $tutor)
    {
        $tutor->delete();
    }
}
