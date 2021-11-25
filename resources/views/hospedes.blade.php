<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
@extends('layouts.app')
@section('content')

    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">     
                <h1>Hospedes</h1>    

                <br><br>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Cpf</th>
                            <th scope="col">Email</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Excluir</th>
                        </tr>
                    </thead>
                        <tbody>


                        @foreach($hospedes as $hospede)                      
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$hospede->user->name}}</td>
                            <td>{{$hospede->cpf}}</td>
                            <td>{{$hospede->user->email}}</td>
                           <td>
                               <a href="#"class="btn btn-secondary active"role="button">Editar</a>
                           </td>
                            <td>
                                <a href="{{ route('atendente3', $hospede->id) }}" class="btn btn-danger active"role="button">Apagar</a>
                            </td>
                        </tr>                      
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
 @endsection

</body>
</html>