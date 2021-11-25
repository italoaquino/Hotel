<?php

namespace App\Http\Controllers;

use App\Models\reserva_hospede;
use DateTime;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
  
    public function index()
    {
        $teste = 'italo';
        $user = auth()->user();
        $id= $user->id;
        $reserva_hospede=reserva_hospede::findOrFail($id);
        
       
        





        return view('reserva_hospede',['reserva'=>$reserva_hospede]);


    }

    
    public function create()
    {
        return view('reserva_hospede');
    }

    
    public function store($id)
    {
        

    }

    
    public function show($id)
    {
       
    }

    
    public function edit($id)
    {
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
