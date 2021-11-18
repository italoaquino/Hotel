<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Middleware\HospedeACL;
use App\Models\hospede;
use Illuminate\Http\Request;

class HospedesController extends Controller
{
   
    public function index(){
        return hospede::all();
    }


    
    public function store(Request $request)
    {
        Hospede::create($request->All());
    }

    
    public function show($id)
    {
        return Hospede::findOrFail($id);    
    }

    

    
    public function update(Request $request, $id)
    {
        $hospede = hospede::findOrFail($id);
        $hospede->update($request->all());
    }

    
    public function destroy($id)
    {
        $hospede = hospede::findOrFail($id);
        $hospede->delete();
    }
}
