<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hospede;
use App\Models\User;

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
        return view('cadastroFuncionario');
    }

    public function all(){
        $hospedes=hospede::all();
        return view('hospedes',['hospedes'=>$hospedes]);
    }

    public function show($id){
        $hospede=hospede::findOrFail($id);
        return view('detalhes_hospede',['hospede'=>$hospede]);
    }

    public function destroy($id){
        hospede::destroy($id);
        User::destroy($id);
        return redirect("/atendente");
    }

    public function edit($id){
        $hospede=hospede::findOrFail($id);
        return view('hospede',['hospede'=>$hospede]);
    }
    public function update(Request $request,$id){
        $hospede=hospede::findOrFail($id);
        $hospede->update($request->all());
        return redirect('/atendente');
    }

    public function hospede(){
        return 'Yeah autenticado como hospede';
    }

}
