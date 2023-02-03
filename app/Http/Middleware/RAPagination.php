<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RAPagination
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if($pagina = $request->input('page') )
        {
            $numElementos = $pagina['size'];
            $numPagina = $pagina['number'];
            $request->merge(array('page' => $numPagina, 'numElements' => $numElementos));
        }

        return $next($request);
    }
}
