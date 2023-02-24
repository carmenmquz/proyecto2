<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tutor;
use App\Http\Resources\TutorResource;

class TutorController extends Controller
{

    // public function __construct()
    // {
    //     $this->authorizeResource(Tutor::class, 'tutor');
    // }

    public function index(Request $request)
    {
        $numElementos = $request->input('numElements');

        $registrosTutores = searchByField(array('name', 'email'), Tutor::class);

        return TutorResource::collection($registrosTutores->paginate($numElementos));
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
