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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <title>Document</title>
</head>
<body>
    @extends('layouts.app')
    @section('content')

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
                            <a class="btn btn-primary" style="background-color: rgb(236, 204, 115) " href="{{ route('quarto') }}" role="button">Mais detalhes >>></a>
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
                            <a class="btn btn-primary" style="background-color: rgb(236, 204, 115) " href="{{ route('quarto') }}" role="button">Mais detalhes >>></a>
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
                            <a class="btn btn-primary" style="background-color: rgb(236, 204, 115) " href="{{ route('quarto') }}" role="button">Mais detalhes >>></a>
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
                            <a class="btn btn-primary" style="background-color: rgb(236, 204, 115) " href="{{ route('quarto') }}" role="button">Mais detalhes >>></a>
                        </div>
                </div>
            </div>
        </div>
    </div>
        
    <div id="preco"; style="display: inline-block; height: 250px; border-radius: 5px;">
        <h1 id="formatar"; style="color: green";>R$ 150</h1>
    </div>


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