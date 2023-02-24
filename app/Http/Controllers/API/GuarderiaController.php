<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use App\Http\Resources\GuarderiaResource;

class GuarderiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filtro = $request->input('filter') ? $request->input('filter')['q'] : '';
        $urlGuarderiasAPI = "https://datosabiertos.regiondemurcia.es/catalogo/api/action//datastore_search_sql?sql=SELECT%20*%20from%20%221e1e7cd9-ca2a-4a35-a07c-f7bc62f3a91f%22%20WHERE%20%22dc:titulo%22%20LIKE%20%27%$filtro%%27";
        $response = Http::get($urlGuarderiasAPI);
        $decodificar = json_decode($response, true);
        $records = $decodificar['result']['records'];
        return GuarderiaResource::collection($records);
    }
}
