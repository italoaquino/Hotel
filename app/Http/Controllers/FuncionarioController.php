<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
   
    public function index()
    {
        return view("cadFuncionario");
    }

    
    public function create()
    {
        return view("cadFuncionario");

    }

   
    public function store(Request $request)
    {
        Funcionario::create($request->all());
        return redirect(/);
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
