<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hospede;

class PerfilController extends Controller
{
   
    public function index()
    {
        $user = auth()->user();
        $id= $user->id;
        $hospedes=hospede::findOrFail($id);
        return view('perfil',['hospede'=>$hospedes]);
    }

    
    public function create(Request $request)
    {
        
    }

    public function store(Request $request)
    {
       
    }

   
    public function show($id)
    {
        
    }


    public function edit()
    {
        $user = auth()->user();
        $id= $user->id;
        $hospede = hospede::findOrFail($id);
        return view('update', ['hospede'=>$hospede]);
    }

   
    public function update(Request $request)
    {
        $user = auth()->user();
        $id= $user->id;
        $hospede = hospede::findOrFail($id);
        $hospede->update($request->all());
        return redirect('/perfil');
    }

   
    public function destroy($id)
    {
        //
    }
}
