<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Scripts -->
   <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+P+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+P+One&family=Red+Hat+Mono:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">    <title>Document</title>
</head>
<body>
@extends('layouts.app')
@section('content')



    <section class="section-sobre">

    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-20" style="padding-top: 50px !important;">
            <div class="card">
                    <div class="card-body">
                    <form method="POST" action="{{ route('reservar_store') }}" class="row g-3">
                    @csrf   
                        <div class="col-md-4">
                            <label for="validationCustom01" class="form-label" style="font-size: 25 !important;">Entrada</label>
                            <input type="date" class="form-control" id="validationCustom01" name="entrada" placeholder="Cpf" required>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom01" class="form-label">Saida</label>
                            <input type="date" class="form-control" id="validationCustom01" name="saida" placeholder="Cpf" required>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom02" class="form-label">Pessoas</label>
                            <input type="number" class="form-control" id="validationCustom02" name="pessoas" placeholder="0" required>
                        </div>
                        <div class="col-12">
                        <input type="submit" class="btn btn-primary">
                        </div>


                    </form>
    </div>
</div>


   
</section>


        <footer>
    <div class="footer">
        <div class="container">
            <div class="row">
            <div class="footer-col">
                <h4>Sobre</h4>
                <ul>
                <li><a href="#">Fundação</a></li>
                <li><a href="#">Polos</a></li>
                <li><a href="#">Hoje</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Contato</h4>
                <ul>
                <li><a href="#">Telefone</a></li>
                <li><a href="#">Email</a></li>
                <li><a href="#">Teste</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Endereço</h4>
                <ul>
                <li><a href="#">Localização</a></li>
                <li><a href="#">Endereço</a></li>
                <li><a href="#">Cep</a></li>
                </ul>
            </div>
            <div class="teste">
                <ul>
                <li><a href=""><i class="bi bi-facebook"></i></a></li>
                <li><a href=""><i class="bi bi-instagram"></i></a></li>
                <li><a href=""><i class="bi bi-twitter"></i></a></li>
                </ul>
            </div>
            </div>
        </div>
        <h2 class="footerfinal">&copy 2021 Copyright - Hotel Solarys</h2>

        </div>

    </footer>
    @endsection
</body>
</html>