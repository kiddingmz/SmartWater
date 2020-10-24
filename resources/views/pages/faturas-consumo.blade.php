<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/png" href="{{asset('assets/images/smart/Logo/smartwater.png')}}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/bed30b58b0.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets/css/smart/facturas_consumo.css')}}">
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
                <ul class="nav nav-tabs nav-justified">
                    <li class="nav-item active tabs-style">
                        <a href="#factura" class="nav-link" data-toggle="tab">Faturas</a>
                    </li>
                    <li class="nav-item tabs-style">
                        <a href="#consumo" class="nav-link" data-toggle="tab">Consumo</a>
                    </li>
                </ul>
                <div class="tab-content shadow-lg">
                    <div class="tab-pane fade show tab-1" id="factura">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="tabelas">
                                    <div class="tb-header">Historico</div>
                                    <div class="caixa">
                                        <div class="combo">
                                            Ano:
                                            <select>
                                                <option>2020</option>
                                                <option>2019</option>
                                                <option>2018</option>
                                                <option>2017</option>
                                                <option>2016</option>
                                                <option>2015</option>
                                                <option>2014</option>
                                            </select>
                                        </div>
                                        <div class="combo">
                                            Mes:
                                            <select>
                                                <option>Janeiro</option>
                                                <option>Fevereiro</option>
                                                <option>Marco</option>
                                                <option>Abril</option>
                                                <option>Maio</option>
                                                <option>Junho</option>
                                                <option>Julho</option>
                                                <option>Agosto</option>
                                                <option>Setembro</option>
                                                <option>Outubro</option>
                                                <option>Novembro</option>
                                                <option>Dezembro</option>
                                            </select>
                                        </div>
                                        <div class="combo">
                                            Estado:
                                            <select>
                                                <option>Pago</option>
                                                <option>Divida</option>
                                            </select>
                                        </div>
                                        <button class="btn-combo">Pesquisar</button>
                                    </div>
                                    <div class="table-responsive tabela">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th scope="col">Ano</th>
                                                <th scope="col">Mes</th>
                                                <th scope="col">Valor</th>
                                                <th scope="col">Referencia</th>
                                                <th scope="col">Moeda</th>
                                                <th scope="col"></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row">2020</th>
                                                <td>Outubro</td>
                                                <td>1300</td>
                                                <td>1232516437</td>
                                                <td> MZN </td>
                                                <td>
                                                    <button class="btn-tb"> Baixar </button>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="envio-multas">
                                    <div class="envio">
                                        <div class="envio-header">Envio de faturas</div>
                                        <div class="btns">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="metodoEnvio" id="radioEnvio" value="option1" checked>
                                                <label class="form-check-label" for="metodoEnvio">
                                                    Via sms
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="metodoEnvio" id="radioEnvio" value="option2">
                                                <label class="form-check-label" for="metodoEnvio">
                                                    Via email
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="multas">
                                        <div class="multas-header">Multas</div>
                                        <div class="table-responsive tabela">
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th scope="col">Ano</th>
                                                    <th scope="col">Mes</th>
                                                    <th scope="col">Valor</th>
                                                    <th scope="col">Descricao</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show active tab-1" id="consumo">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="tabelas">
                                    <div class="tb-header">Historico</div>
                                    <div class="caixa">
                                        <div class="combo">
                                            Ano:
                                            <select>
                                                <option>2020</option>
                                                <option>2019</option>
                                                <option>2018</option>
                                                <option>2017</option>
                                                <option>2016</option>
                                                <option>2015</option>
                                                <option>2014</option>
                                            </select>
                                        </div>
                                        <div class="combo">
                                            Mes:
                                            <select>
                                                <option>Janeiro</option>
                                                <option>Fevereiro</option>
                                                <option>Marco</option>
                                                <option>Abril</option>
                                                <option>Maio</option>
                                                <option>Junho</option>
                                                <option>Julho</option>
                                                <option>Agosto</option>
                                                <option>Setembro</option>
                                                <option>Outubro</option>
                                                <option>Novembro</option>
                                                <option>Dezembro</option>
                                            </select>
                                        </div>
                                        <button class="btn-combo">Pesquisar</button>
                                    </div>
                                    <div class="table-responsive tabela">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th scope="col">Ano</th>
                                                <th scope="col">Mes</th>
                                                <th scope="col">Consumo</th>
                                                <th scope="col">Contrato e Escalao</th>
                                                <th scope="col"></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row"></th>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <button class="btn-tb"> Baixar </button>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="container">
                                    <div class="chart-body">
                                        <canvas id="barChartStacked"></canvas>
                                    </div>
                                    <div class="analise-rapida">
                                        <div class="analise-header">
                                            <p>Analise Rapida</p>
                                        </div>
                                        <div class="analise-content">
                                            <div class="an-group">
                                                Maior consumo:
                                                <p> xxx m3</p>
                                            </div>
                                            <div class="an-group">
                                                Consumo medio:
                                                <p> xxx m3</p>
                                            </div>
                                            <div class="an-group">
                                                Menor consumo:
                                                <p> xxx m3</p>
                                            </div>
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
<script src="{{asset('assets/js/main.js')}}"></script>
@include('base.include-js')
</html>

