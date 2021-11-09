<?php

namespace App\Http\Controllers;

use App\Models\endereco;
use Illuminate\Http\Request;

class EnderecoController extends Controller
{
    
    public function index()
    {
    }

    
    public function create()
    {
        return view('endereco');

    }

    
    public function store(Request $request)
    {
        endereco::create($request->all());
        return redirect('/home');
    }

    
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
