<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ContratacionResource;
use App\Models\Contratacion;
use Illuminate\Http\Request;

class ContratacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = $request->user();

        if($user->isAdmin()) {
            $contratacions = Contratacion::all();
        } else {
            $contratacions = $user->tutor->contratacions;
        }

        return ContratacionResource::collection($contratacions);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contratacion  $contratacion
     * @return \Illuminate\Http\Response
     */
    public function show(Contratacion $contratacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contratacion  $contratacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contratacion $contratacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contratacion  $contratacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contratacion $contratacion)
    {
        //
    }
}
