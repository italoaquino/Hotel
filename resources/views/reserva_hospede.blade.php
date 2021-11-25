<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

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




<section class = "perfil-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">     
                <h1>Hospedes</h1>    

                <br><br>

                <table class="table">
                    <thead>
                        <tr>

                            <th scope="col">Entrada</th>
                            <th scope="col">Saída</th>
                            <th scope="col">Valor</th>
                        </tr>
                    </thead>
                        <tbody>
                        <tr>
                            <td>{{$reserva->entrada}}</td>
                            <td>{{$reserva->saida}}</td>
                            <td>{{$reserva->valor}}</td>
                        </tr>                      
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
   

    </section>





    @endsection
</body>
</html>
