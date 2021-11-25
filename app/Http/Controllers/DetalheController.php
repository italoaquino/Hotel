<?php

namespace App\Http\Controllers;

use App\Models\hospede;
use App\Models\reserva_hospede;
use Illuminate\Http\Request;

class DetalheController extends Controller
{
   
    public function index()
    {
        return view('detalhes');
    }

    
    public function create()
    {
        return view('detalhes');
    }

    
    public function store(Request $request)
    { 
 

        $user = auth()->user();
        $reserva = new reserva_hospede;
        $reserva-> hospede_id = $user->id;
        $reserva-> entrada= $request->entrada;
        $reserva-> saida= $request->saida;
        $reserva-> pessoas= $request->pessoas;
        $reserva-> valor = 150;
        $reserva->save();
        return redirect('/reservas');
    }

    
    public function show($id)
    {
        //
    }

 
    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
