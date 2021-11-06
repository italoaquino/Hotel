<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AtendenteACL
{
   
    if(auth()->check()&&auth()->user()->atendente){
        return $next($request);
    }
    dd('Sem acesso de atendente');
}
