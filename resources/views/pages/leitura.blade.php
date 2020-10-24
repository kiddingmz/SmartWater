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
    <link rel="stylesheet" href="{{asset('assets/css/smart/header.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/smart/leituras.css')}}">

    <title>Leituras</title>
</head>
<body>
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
            <div class="container-fluid">
                <div class="conteudo">
                    <div class="conteudo-grid">
                        <p class="hding">Dados do Cliente</p>
                        <div class="conteudo-flex">
                            <div class="info">
                                Tipo de Leitura:
                                <p class="dt-lb-1"> Feita pelo cliente</p>
                            </div>
                            <div class="info">
                                Tipo de Contrato:
                                <p class="dt-lb-2"> Domestico</p>
                            </div>
                            <div class="info">
                                Mes:
                                <p class="dt-lb-3"> xxxxxxxxxx</p>
                            </div>
                            <div class="info">
                                Proprietario:
                                <p class="dt-lb-4"> Anisio</p>
                            </div>
                            <div class="info">
                                Ano:
                                <p class="dt-lb-5"> xxxxxxxxxx</p>
                            </div>
                            <div class="info">
                                Codigo do Cliente:
                                <p class="dt-lb-6"> xxxxxxxxxx</p>
                            </div>
                        </div>
                    </div>
                    <div class="form">
                        <form>
                            <p class="hding">Leitura</p>
                            <div class="form-flex">
                                <div class="form-grp">
                                    Insira a leitura
                                    <input type="text" name="leitura-cod" placeholder="xxxxxx" required>
                                </div>
                                <div class="comprovativo">
                                    <div class="comprovativo-atach">
                                        Comprovativo:
                                        <a href="#">
                                            <i class="fas fa-camera"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fas fa-paperclip"></i>
                                        </a>
                                    </div>
                                    <input type="submit" name="submit-leitura" value="Submeter">
                                </div>
                            </div>
                        </form>
                    </div>
                    <p>
                    <p class="text-danger">Aviso: </p>Ao fazer a leitura e obrigatorio usar informacoes veridicas, caso nao o cliente podera sofrer uma multa.
                    </p>
                </div>
            </div>
            <main>
    </div>
</div>
</body>
<script src="{{asset('assets/js/main.js')}}"></script>
</html>
