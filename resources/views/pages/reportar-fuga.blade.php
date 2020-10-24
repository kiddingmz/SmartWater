<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="{{asset('assets/images/smart/Logo/smartwater.png')}}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/bed30b58b0.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets/css/smart/fugas.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/smart/header.css')}}">
    <title>Facturas e Consumo</title>
</head>
<body>
<nav class="myHeader">
    <div class="vertical">
        <button class="sideBarBtn sideMenuToggler">
            <i class="fas fa-bars"></i>
        </button>
        <div class="myLogo">
            <div></div>
            <p>SMART WATER</p>
        </div>
        <div class="usrIconImg rounded-circle">
            <i class="fas fa-user"></i>
        </div>
    </div>
</nav>

<div class="wrapper d-flex">
    <div class="sideMenu">
        <div class="sidebar">
            <ul class="navbar-nav">
                <li class="nav-item" id="tgBtn">
                    <a href="#" class="nav-link sideMenuToggler">
                        <i class="fas fa-bars"></i>
                        <span class="text">Menu</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/home" class="nav-link">
                        <i class="fas fa-home"></i>
                        <span class="text">Pagina Inicial</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/faturas-consumo" class="nav-link">
                        <i class="fas fa-book"></i>
                        <span class="text">Faturas e Consumo</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/leitura" class="nav-link">
                        <i class="fas fa-book-open"></i>
                        <span class="text">Leitura</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/fuga" class="nav-link">
                        <i class="fas fa-map-marked-alt"></i>
                        <span class="text">Reportar Fuga</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/nossas-lojas" class="nav-link">
                        <i class="fas fa-map-marker-alt"></i>
                        <span class="text">Localize nossas lojas</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="content">
        <main>
            <div class="container">
                <div class="fugas">
                    <div class="fugas-header">
                        <p>Reportar Fugas</p>
                    </div>
                    <div class="fugas-content">
                        <div class="fugas-group">
                            Descricao
                            <input type="text" name="descricao-fugas" placeholder="descreva aqui...">
                        </div>
                        <div class="fugas-comprovativo">
                            Imagens:
                            <a href="#">
                                <i class="fas fa-camera"></i>
                            </a>
                            <a href="#">
                                <i class="fas fa-paperclip"></i>
                            </a>
                        </div>
                        <div class="fugas-map">
                            <div>
                                <p>Partihar a localizacao</p>
                            </div>
                            <div class="mapa">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mapa-div" id="map">

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mapa-form">
                                            <form>
                                                <div class="fugas-group">
                                                    Zona:
                                                    <input type="text" name="descricao-fugas" placeholder="">
                                                </div>
                                                <div class="fugas-group">
                                                    Quarteirao
                                                    <input type="text" name="descricao-fugas" placeholder="">
                                                </div>
                                                <input type="submit" class="form-btn" name="mapa-info" value="Enviar">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <main>
    </div>
</div>
</body>
<script src="JS/main.js"></script>
<script>
    function initMap() {
        var location =  { lat: 25.9692, lng: 32.5732};
        var map = new google.maps.Map(document.getElementById("map"), {
            zoom: 4,
            center: location
        });
        var marker = new google.maps.Marker({
            position: location,
            map: map
        })
    }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCv_2q9hSDFM0UlO4cArXEXuyRgpjf4tLg&callback=initMap"
        type="text/javascript"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
</html>

