<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

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

<section style="padding-bottom: 100px !important;">



    <!--CADASTRO-->
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Pessoal') }}</div>
                    <div class="card-body">
                      <form method="POST" action="{{ route('endereco_cadastro_store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="cpf" class="col-md-4 col-form-label text-md-right">Estado</label>
                            <div class="col-md-6">
                                <input id="cpf" type="text" name="estado" placeholder="Minas Gerais">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="rg" class="col-md-4 col-form-label text-md-right">Cidade</label>
                            <div class="col-md-6">
                                <input id="rg" type="text" name="cidade" placeholder="Belo Horizonte">
                            </div>
                        </div>
 
                        <div class="form-group row">
                            <label for="rg" class="col-md-4 col-form-label text-md-right">Bairro</label>
                            <div class="col-md-6">
                                <input id="rg" type="text" name="bairro" placeholder="Anchieta">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="rg" class="col-md-4 col-form-label text-md-right">Endereco</label>
                            <div class="col-md-6">
                                <input id="rg" type="text" name="endereco" placeholder="Rua 07">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="rg" class="col-md-4 col-form-label text-md-right">Complemento</label>
                            <div class="col-md-6">
                                <input id="rg" type="text" name="complemento" placeholder="Casa 50">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="rg" class="col-md-4 col-form-label text-md-right">Cep</label>
                            <div class="col-md-6">
                                <input id="rg" type="number" name="cep" placeholder="0000000">
                            </div>
                        </div>
                          <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                  Registrar
                                </button>
                            </div>
                        </div>
                    </form>
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