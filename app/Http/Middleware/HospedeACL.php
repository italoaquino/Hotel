<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HospedeACL
{
  
    public function handle(Request $request, Closure $next)
    {
        if(auth()->check() && auth()->user()->hospede){  
            return $next($request);
        }
        dd('Sem acesso de hospede');
}
