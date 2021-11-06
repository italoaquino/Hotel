<?php
public function handle(Request $request,Closure $next){
    if(auth()->check() && auth()->user()->admin){
        return $next($request);
    }
    dd('Sem acesso de admin');
}