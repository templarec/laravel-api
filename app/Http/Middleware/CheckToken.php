<?php

namespace App\Http\Middleware;

use Closure;

class CheckToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $token = 'FKeXlz4K34vz2L2Et9fNhc43y8pIGkWcmIhKFnSRrjeDNxXutvGr1XvkmnYGg0fc';
        if(!($request->api_token == $token)) {
            return response()->json(['data' => 'Api token authentication failed', 'success' => false]);
        }

        return $next($request);
    }
}
