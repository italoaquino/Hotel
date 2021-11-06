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

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                    @guest
                    
                    @if(Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{__('Login')}}</a>
                    </li>
                    @endif

                    @if(Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{__('Register')}}</a>

                    </li>
                    
                    @endif
                    
                    @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
<section>
    <!--CADASTRO-->
    <div id="cadastro">
          <form method="" action=""> 

          @csrf
            <div class="h1-cad">
            <h1>Cadastro Hospede</h1> 
            </div>
                <label class= "cad-label" for="nome_cad" >Nome</label>
              <input class= "cad-input" id="nome_cad" name="nome" required="required" type="text" placeholder="nome">
              <label class= "cad-label" for="sobrenome">Sobrenome</label>
              <input class= "cad-input" type="text" id="sobrenome" required="required" name="sobrenome" placeholder="Sobrenome">
            
           
              <label class= "cad-label" for="sexo">Sexo</label>
              <select class="select" id="sexo">
                  <option value="masculino" >Masculino</option>
                  <option value="feminino">Feminino</option>
              </select>
            
              <fieldset>
                <label class= "cad-label" for="rg">RG</label>
                <input class="cad-input" type="number" name="rg" require="required" placeholder="000.000.000.00">
                <label class= "cad-label" for="cpf">CPF</label>
                <input class= "cad-input" type="text" name="cpf" require="required" placeholder="0000000">
                <label class= "cad-label" for="dataNasc">Data de nascimento</label>
                <input class= "cad-input" type="date" name="dataNasc" require="required">
            </fieldset>
            
            <br>
            <p class="cad-p">Largadouro</p>

            </fieldset>
            <label class="cad-label" style="font-family: 'Raleway', sans-serif;" for="uf">UF</label>
                <select class= "select" name='uf'>
                    <option value="AC">AC</option>
                    <option value="AM">AM</option>
                    <option value="RR">RR</option>
                    <option value="PA">PA</option>
                    <option value="AP">AP</option>
                    <option value="TO">TO</option>
                    <option value="MA">MA</option>
                    <option value="PI">PI</option>
                    <option value="CE">CE</option>
                    <option value="RN">RN</option>
                    <option value="PB">PB</option>
                    <option value="PE">PE</option>
                    <option value="AL">AL</option>
                    <option value="SE">SE</option>
                    <option value="BA">BA</option>
                    <option value="MG">MG</option>
                    <option value="ES">ES</option>
                    <option value="RJ">RJ</option>
                    <option value="SP">SP</option>
                    <option value="PR">PR</option>
                    <option value="SC">SC</option>
                    <option value="RS">RS</option>
                    <option value="MS">MS</option>
                    <option value="MT">MT</option>
                    <option value="GO">GO</option>
                    <option value="DF">DF</option>
                </select>
            
            <label class= "cad-label" for="Cidade" style="padding-left: 20px;">Cidade</label>
            <input class= "cad-input" type="text" id="Cidade" name="cidade" placeholder="Brasilia">
            <label class= "cad-label" for="cep">Cep</label>
            <input class= "cad-input" type="number" id="cep" name="cep" placeholder="00000-000">
            </fieldset>
            <fieldset>
                <label class= "cad-label" for="bairro">Bairro</label>
                <input class= "cad-input" type="text" id="bairro" name="bairro" placeholder="Planaltina">
                <label class= "cad-label" for="endereco">Endereço</label>
                <input class= "cad-input" type="text" id="endereco" name="endereco" placeholder="Conjunto 40">
            <label class= "cad-label" for="complemento">complemento</label>
            <input class= "cad-input" type="text" id="complemento" name="complemento" placeholder="Casa 50">
            </fieldset>
            <br>
            <br>
            <div class="testando">
                
            <p class="cad-p">Contato</p></div>
            

            <label class= "cad-label" for="Telefone">Telefone</label>
            <select class= "select" name="tipo">
                <option value="fixo">Fixo</option>
                <option value="celular">Celular</option>
                <option value="comercial">Comercial</option>
            </select>
            
            <label class= "cad-label" for="numero" style="padding-left: 20px;">Numero</label>
            <input class= "cad-input" type="number" id="numero" name="numero" placeholder="33894625">
            <label class= "cad-label" for="email">Email</label>
            <input class= "cad-input" type="email" id="email" name="email" placeholder="Luis_dasil@outlook.com"> 
            
            <br>
           

            <label class= "cad-label" for="senha">Digite sua senha: </label>
            <input class= "cad-input" type="password" id="senha" name="senha" placeholder="*****">
            <label class= "cad-label" for="senha">Repita sua senha: </label>
            <input class= "cad-input" type="password" id="senha" name="senha" placeholder="*****">
            
            <br>
            <br>
            <fieldset>
            <button type="button" class="btn btn-primary btn-lg">Cancelar</button>
            <button type="button" class="btn btn-secondary btn-lg">Cadastrar</button>
            </fieldset>
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

</body>
</html>