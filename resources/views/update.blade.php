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



   
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Pessoal') }}</div>
                    <div class="card-body">
                    <form method="POST" action="{{ route('update_hospede') }}" class="row g-3">
                    @csrf   
                        <div class="col-md-4">
                            <label for="validationCustom01" class="form-label">CPF</label>
                            <input type="text" class="form-control" id="validationCustom01" name="cpf" placeholder="Cpf" required>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom02" class="form-label">RG</label>
                            <input type="text" class="form-control" id="validationCustom02" name="rg" placeholder="Rg"required>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom02" class="form-label">Cidade</label>
                            <input type="text" class="form-control" id="validationCustom02" name="cidade" placeholder="Cidade" required>
                        </div>

                        <div class="col-md-4">
                            <label for="validationCustom04" class="form-label">Estado</label>
                            <select id="estado" name="estado" class="form-select">
                                <option value="AC">Acre</option>
                                <option value="AL">Alagoas</option>
                                <option value="AP">Amapá</option>
                                <option value="AM">Amazonas</option>
                                <option value="BA">Bahia</option>
                                <option value="CE">Ceará</option>
                                <option value="DF">Distrito Federal</option>
                                <option value="ES">Espírito Santo</option>
                                <option value="GO">Goiás</option>
                                <option value="MA">Maranhão</option>
                                <option value="MT">Mato Grosso</option>
                                <option value="MS">Mato Grosso do Sul</option>
                                <option value="MG">Minas Gerais</option>
                                <option value="PA">Pará</option>
                                <option value="PB">Paraíba</option>
                                <option value="PR">Paraná</option>
                                <option value="PE">Pernambuco</option>
                                <option value="PI">Piauí</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="RN">Rio Grande do Norte</option>
                                <option value="RS">Rio Grande do Sul</option>
                                <option value="RO">Rondônia</option>
                                <option value="RR">Roraima</option>
                                <option value="SC">Santa Catarina</option>
                                <option value="SP">São Paulo</option>
                                <option value="SE">Sergipe</option>
                                <option value="TO">Tocantins</option>
                                <option value="EX">Estrangeiro</option>
                            </select>
                        </div>
                        
                        <div class="col-md-4">
                            <label for="validationCustom03" class="form-label">Endereço</label>
                            <input type="text" class="form-control" name="endereco" id="validationCustom03" required>
                        </div>
                        
                        
                        <div class="col-md-4">
                            <label for="validationCustom05" class="form-label">Cep</label>
                            <input type="text" class="form-control" id="validationCustom05" name="cep" placeholder="Cep" required>

                        </div>
                        <div class="col-md-5">
                            <label for="validationCustom01" class="form-label">Bairro</label>
                            <input type="text" class="form-control" id="validationCustom01" name="bairro" placeholder="Bairro" required>

                        </div>
                        
                        <div class="col-md-6">
                            <label for="validationCustom02" class="form-label">Complemento</label>
                            <input type="text" class="form-control" id="validationCustom02" name="complemento" placeholder="Complemento" required>

                        </div>

                        <div class="col-md-6">
                            <label for="validationCustom01" class="form-label">Telefone</label>
                            <input type="text" class="form-control" id="validationCustom01" name="numero" placeholder="Telefone" required>

                        </div>
                        <div class="col-md-3">
                            <label for="validationCustom04" class="form-label">Tipo</label>
                            <select id="tipo" name="tipo"  class="form-select">
                                <option value="Comercial">comercial</option>
                                <option value="Residencial">residencial</option>
                                <option value="Fixo">fixo</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                            <label class="form-check-label" for="invalidCheck">
                                Agree to terms and conditions
                            </label>
                            </div>
                        </div>
                        <div class="col-12">
                        <input type="submit" class="btn btn-primary" >
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