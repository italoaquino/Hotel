<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hospede;

class PerfilController extends Controller
{
   
    public function index()
    {
            $user = auth()->user();
            $id = $user->id;
            $hospede = Hospede::findOrFail($id);
            return view('pefil',['hospede'=>$hospede]);
    }

    
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

   
    public function show($id)
    {
        
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
