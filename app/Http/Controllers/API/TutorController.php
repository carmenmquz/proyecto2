<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Tutor;
use Illuminate\Http\Request;
use App\Http\Resources\TutorResource;

class TutorController extends Controller
{

    /**
     * Create the controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->authorizeResource(Tutor::class, 'tutor');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $numElementos = $request->input('numElements');

        $registros = searchByField(array('first_name', 'last_name', 'job_title', 'city', 'country'), Tutor::class);

        return TutorResource::collection($registros->paginate($numElementos));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->user()->cannot('create', Tutor::class)) {
            abort(403);
        }

        $this->authorize('create', Tutor::class);

        $tutor = json_decode($request->getContent(), true);

        $tutor = Tutor::create($tutor['data']['attributes']);

        return new TutorResource($tutor);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tutor  $tutor
     * @return \Illuminate\Http\Response
     */
    public function show(Tutor $tutor)
    {
        return new TutorResource($tutor);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tutor  $tutor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tutor $tutor)
    {
        if ($request->user()->cannot('update', $tutor)) {
            abort(403);
        }

        $this->authorize('update', $tutor);
        $tutorData = json_decode($request->getContent(), true);
        $tutor->update($tutorData['data']['attributes']);

        return new TutorResource($tutor);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tutor  $tutor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tutor $tutor)
    {
        $tutor->delete();
    }
}
