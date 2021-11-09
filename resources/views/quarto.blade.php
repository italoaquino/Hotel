<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    <div class="titleBar parbase aem-GridColumn aem-GridColumn--default--12">
    <div id="title-bar" class="titlebar"; style="margin-top:50px; text-align: center;">
        <div class="container clearfix">
            <h1 id="formatar"; style="font-size: 50px;  font-family: serif;">Reserve na Solari's</h1>
                <div id="formatar"; style="font-size: 20px">
                    <span>Garantimos o melhor preço!</span>
                </div>
            </div>
        </div>
    </div>

    <div id="estadia2">
        <h2 id="formatar"; style="font-size: 25px; padding-top: 20px; display: inline-block">Ordenar por:</h2>
            <div class="row">
                <div class="col-md-6" style="margin-top: 10px;">
                    <button type="button"; style="background-color: rgba(255, 238, 191, 0.856)"; class="btn btn-primary btn-sm">Mais barato</button>
                    <button type="button"; style="background-color: rgba(255, 238, 191, 0.856)"; class="btn btn-primary btn-sm">Mais caro</button>
                    <button type="button"; style="background-color: rgba(255, 238, 191, 0.856)"; class="btn btn-primary btn-sm">Melhor avaliado</button>
                    <button type="button"; style="background-color: rgba(255, 238, 191, 0.856)"; class="btn btn-primary btn-sm">Distância</button>
                </div>
            </div>
    </div>

    <div id="reservar1"; style="width: 60%; height: 250px; border-radius: 5px; position: relative; display: inline-block">
        <div class="item__image-area">
            <div data-qa="gallery-slideout" class="item__image-wrapper pos-relative">
                <div class="lazy-image__image-wrapper" itemprop="image" itemscope="itemscope" itemtype="https://schema.org/ImageObject">
                    <img alt="" itemprop="url" src="//imgcy.trivago.com/c_lfill,d_dummy.jpeg,e_sharpen:60,f_auto,h_225,q_auto,w_225/itemimages/20/99/2099050.jpeg" style="width: 300px; border-radius: 5px">
                        <div id="text_foto">
                            <h1 id="formatar"; style="color: rgb(212, 184, 107); font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Quarto Royal</h1>
                            <p id="formatar"; style=" font-family: monospace; font-size:20px">Café da manhã / WI-FI / Hidro / Suíte</p>
                            <p id="formatar"; style=" font-family: Verdana, Geneva, Tahoma, sans-serif; font-size: 15px">A melhor experiência se encontra no Royal! Ideal para casais</p>
                            <a class="btn btn-primary" style="background-color: rgb(236, 204, 115) "; role="button"; href="{{route ('login')}}">Reservar</a></a>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <div id="preco"; style="display: inline-block; height: 250px; border-radius: 5px;">
        <h1 id="formatar"; style="color: green";>R$ 150</h1>
    </div>

    <div id="reservar1"; style="width: 60%; height: 250px; border-radius: 5px; position: relative; display: inline-block">
        <div class="item__image-area">
            <div data-qa="gallery-slideout" class="item__image-wrapper pos-relative">
                <div class="lazy-image__image-wrapper" itemprop="image" itemscope="itemscope" itemtype="https://schema.org/ImageObject">
                    <img alt="" itemprop="url" src="//imgcy.trivago.com/c_lfill,d_dummy.jpeg,e_sharpen:60,f_auto,h_225,q_auto,w_225/itemimages/20/99/2099050.jpeg" style="width: 300px; border-radius: 5px; position: inline-block">
                    <div id="text_foto">
                            <h1 id="formatar"; style="color: rgb(212, 184, 107); font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Suíte</h1>
                            <p id="formatar"; style=" font-family: monospace; font-size:20px">Café da manhã / WI-FI / Suíte </p>
                            <p id="formatar"; style=" font-family: Verdana, Geneva, Tahoma, sans-serif; font-size: 15px"> Qualidade e preço na medida certa!</p>
                            <a class="btn btn-primary" style="background-color: rgb(236, 204, 115) " role="button"; href="{{route ('login')}}">Reservar</a></a>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <div id="preco"; style="display: inline-block; height: 250px; border-radius: 5px;">
        <h1 id="formatar"; style="color: green";>R$ 150</h1>
    </div>

    <div id="reservar1"; style="width: 60%; height: 250px; border-radius: 5px; position: relative; display: inline-block">
        <div class="item__image-area">
            <div data-qa="gallery-slideout" class="item__image-wrapper pos-relative">
                <div class="lazy-image__image-wrapper" itemprop="image" itemscope="itemscope" itemtype="https://schema.org/ImageObject">
                    <img alt="" itemprop="url" src="//imgcy.trivago.com/c_lfill,d_dummy.jpeg,e_sharpen:60,f_auto,h_225,q_auto,w_225/itemimages/20/99/2099050.jpeg" style="width: 300px; border-radius: 5px; position: inline-block">
                    <div id="text_foto">
                            <h1 id="formatar"; style="color: rgb(212, 184, 107); font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Quarto Deluxe Premium</h1>
                            <p id="formatar"; style=" font-family: monospace; font-size:20px">Café da manhã / WI-FI / Hidro / Suíte </p>
                            <p id="formatar"; style=" font-family: Verdana, Geneva, Tahoma, sans-serif; font-size: 15px">Comodidade com uma área ainda maior. Para toda a família! </p>
                            <a class="btn btn-primary" style="background-color: rgb(236, 204, 115) " role="button"; href="{{route ('login')}}">Reservar</a></a>
                        </div>
                </div>
            </div>
        </div>
    </div>
        
    <div id="preco"; style="display: inline-block; height: 250px; border-radius: 5px;">
        <h1 id="formatar"; style="color: green";>R$ 150</h1>
    </div>

    <div id="reservar1"; style="width: 60%; height: 250px; border-radius: 5px; position: relative; display: inline-block">
        <div class="item__image-area">
            <div data-qa="gallery-slideout" class="item__image-wrapper pos-relative">
                <div class="lazy-image__image-wrapper" itemprop="image" itemscope="itemscope" itemtype="https://schema.org/ImageObject">
                    <img alt="" itemprop="url" src="//imgcy.trivago.com/c_lfill,d_dummy.jpeg,e_sharpen:60,f_auto,h_225,q_auto,w_225/itemimages/20/99/2099050.jpeg" style="width: 300px; border-radius: 5px; position: inline-block">
                    <div id="text_foto">
                            <h1 id="formatar"; style="color: rgb(212, 184, 107); font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Quarto Deluxe</h1>
                            <p id="formatar"; style=" font-family: monospace; font-size:20px">Café da manhã / WI-FI / Hidro</p>
                            <p id="formatar"; style=" font-family: Verdana, Geneva, Tahoma, sans-serif; font-size: 15px">Experimente o conforto e o grande espaço do quarto deluxe! Privacidade é o diferencial!</p>
                            <a class="btn btn-primary" style="background-color: rgb(236, 204, 115) " role="button"; href="{{route ('login')}}">Reservar</a></a>
                        </div>
                </div>
            </div>
        </div>
    </div>
        
    <div id="preco"; style="display: inline-block; height: 250px; border-radius: 5px;">
        <h1 id="formatar"; style="color: green";>R$ 150</h1>
    </div>

</body>
</html>