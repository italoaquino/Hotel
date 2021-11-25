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






    <section class = "perfil-section" style="padding-top: 100px; height: 600px;">
    <div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                            <h1>Perfil</h1>
                                    <br>
                                    <br>
                                    <br>

                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Sobre</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Endereço</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <a href="{{ route('hospede_update') }}" class="btn btn-outline-secondary">Editar perfil</a>
                </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work"">
                            <p></p>
                            <a href="" style="display: none;">Website Link</a><br/>
                            <a href="{{ route('reservas') }}" >Reserva</a><br/>
                            <a href="" style="display: none;">Bootply Profile</a>
                            <p style="display: none;">SKILLS</p>
                            <a href="" style="display: none;">Web Designer</a><br/>
                            <a href="" style="display: none;">Web Developer</a><br/>
                            <a href="" style="display: none;">WordPress</a><br/>
                            <a href="" style="display: none;">WooCommerce</a><br/>
                            <a href=""style="display: none;">PHP, .Net</a><br/>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                            <div class="col-md-6">
                                                <label>Nome</label>
                                            </div>
                                            <div class="col-md-6">
                                            <p>{{$hospede->user->name}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                            <p>{{$hospede->user->email}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Cpf</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$hospede->cpf}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Telefone</label>
                                            </div>
                                            <div class="col-md-6">
                                            <p>{{$hospede->numero}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Tipo</label>
                                            </div>
                                            <div class="col-md-6">
                                            <p>{{$hospede->tipo}}</p>
                                            </div>
                                        </div>
                                       
                                       
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Estado</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$hospede->estado}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Cidade</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$hospede->cidade}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Bairro</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$hospede->bairro}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Cep</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$hospede->cep}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Complemento</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$hospede->complemento}}</p>
                                            </div>
                                     </div>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
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