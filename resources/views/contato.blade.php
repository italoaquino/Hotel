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
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Sobre nós</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('quarto') }}">Quarto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contato') }}">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Reserva</a>
                    </li>

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


<div class= "contato">
  <div class="container mt-5" >
    <div class="row" style="">
      <div class="col-md-6 maps" >
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d983784.7024145657!2d-47.794420315589576!3d-15.596510455518699!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a3bcac8d26f99%3A0x46716d80308b6586!2sUNIP%20-%20Bras%C3%ADlia!5e0!3m2!1spt-BR!2sbr!4v1634470760672!5m2!1spt-BR!2sbr" width=530" height="520" style="border:0;" allowfullscreen="" loading="lazy"></iframe>  
      </div>
      <div class="col-md-6">
        <h2 class="text-uppercase mt-3 font-weight-bold text-black">Contato</h2>
        <form action="">
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <input type="text" class="form-control mt-2" placeholder="Nome" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <input type="text" class="form-control mt-2" placeholder="Sobrenome" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <input type="email" class="form-control mt-2" placeholder="Email" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <input type="number" class="form-control mt-2" placeholder="Telefone" required>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Insira seu texto" rows="3" required></textarea>
              </div>
            </div>
            <div class="col-12">
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                <label class="form-check-label" for="invalidCheck2">
                  Aceitar as condições

                </label>
              </div>
            </div>
            </div>
            <div class="col-12">
              <button class="btn btn-dark" type="submit">Enviar</button>
            </div>
          </div>
        </form>
        <div class="text-black  ">
        <h2 class="text-uppercase mt-4 font-weight-bold">Contatos</h2>

        <i class="fas fa-phone mt-3"></i> <a href="tel:+">(+55)61 123456</a><br>
        <i class="fas fa-phone mt-3"></i> <a href="tel:+">(+55)61 123456</a><br>
        <i class="fa fa-envelope mt-3"></i> <a href="">hotelsolaris@gmail.com</a><br>
        <a href=""><i class="fab fa-facebook fa-3x pr-4"></i></a>
        <a href=""><i class="fab fa-linkedin fa-3x"></i></a>
        </div>
        </div>
      </div>
    </div>
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