<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
             
    public function index()
    {
        return view('home');
    }

    public function admin(){
        return 'Yeahhh autenticado como admin';
    }

    public function atendente(){
        return 'Yeahh autenticado como atendente';
    }

    public function hospede(){
        return 'Yeah autenticado como hospede';
    }

}
