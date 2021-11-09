<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hospede;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;

class HospedeController extends Controller
{
   
    public function index()
    {
        return view('cadHospede');

    }

   
    public function create()
    {
        return view('cadHospede');
    }

    
    public function store(Request $request)
    {
        $user = auth()->user();

        $hospede = new hospede;
        $hospede->cpf = $request->cpf;
        $hospede->user_id= $user->id;
        $hospede->save();
        return redirect::to('/');

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
