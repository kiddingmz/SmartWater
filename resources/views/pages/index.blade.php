@extends('base.main-layout')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-6">
                <h3 class="mb-0 font-weight-bold">Isidro Bata</h3>
                <p>Última sessão a 3 horas atrás.</p>
            </div>
            <div class="col-sm-6">
                <div class="d-flex align-items-center justify-content-md-end">
                    <div class="mb-3 mb-xl-0 pr-1">
                        <div class="dropdown">
                            <button class="btn bg-white btn-sm dropdown-toggle btn-icon-text border mr-2" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="typcn typcn-calendar-outline mr-2"></i>Last 7 days
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton3" data-x-placement="top-start">
                                <h6 class="dropdown-header">Last 14 days</h6>
                                <a class="dropdown-item" href="#">Last 21 days</a>
                                <a class="dropdown-item" href="#">Last 28 days</a>
                            </div>
                        </div>
                    </div>
                    <div class="pr-1 mb-3 mr-2 mb-xl-0">
                        <button type="button" class="btn btn-sm bg-white btn-icon-text border"><i class="typcn typcn-arrow-forward-outline mr-2"></i>Export</button>
                    </div>
                    <div class="pr-1 mb-3 mb-xl-0">
                        <button type="button" class="btn btn-sm bg-white btn-icon-text border"><i class="typcn typcn-info-large-outline mr-2"></i>info</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 d-flex grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-wrap justify-content-between">
                            <h4 class="card-title mb-3">Últimas transações</h4>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="d-flex justify-content-between mb-4">
                                            <div class="font-weight-medium">Cliente</div>
                                            <div class="font-weight-medium">Montante</div>
                                        </div>
                                        <div class="d-flex justify-content-between mb-4">
                                            <div class="text-secondary font-weight-medium">Connor Chandler</div>
                                            <div class="small">$ 4909</div>
                                        </div>
                                        <div class="d-flex justify-content-between mb-4">
                                            <div class="text-secondary font-weight-medium">Russell Floyd</div>
                                            <div class="small">$857</div>
                                        </div>
                                        <div class="d-flex justify-content-between mb-4">
                                            <div class="text-secondary font-weight-medium">Douglas White</div>
                                            <div class="small">$612	</div>
                                        </div>
                                        <div class="d-flex justify-content-between mb-4">
                                            <div class="text-secondary font-weight-medium">Alta Fletcher </div>
                                            <div class="small">$233</div>
                                        </div>
                                        <div class="d-flex justify-content-between mb-4">
                                            <div class="text-secondary font-weight-medium">Marguerite Pearson</div>
                                            <div class="small">$233</div>
                                        </div>
                                        <div class="d-flex justify-content-between mb-4">
                                            <div class="text-secondary font-weight-medium">Leonard Gutierrez</div>
                                            <div class="small">$35</div>
                                        </div>
                                        <div class="d-flex justify-content-between mb-4">
                                            <div class="text-secondary font-weight-medium">Helen Benson</div>
                                            <div class="small">$43</div>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <div class="text-secondary font-weight-medium">Helen Benson</div>
                                            <div class="small">$43</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 d-flex grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-wrap justify-content-between">
                            <h4 class="card-title mb-3">Estado Dos Lucros</h4>
                            <button type="button" class="btn btn-sm btn-light">Month</button>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="d-md-flex mb-4">
                                    <div class="mr-md-5 mb-4">
                                        <h5 class="mb-1"><i class="typcn typcn-globe-outline mr-1"></i>Entradas</h5>
                                        <h2 class="text-primary mb-1 font-weight-bold">23,342</h2>
                                    </div>
                                    <div class="mr-md-5 mb-4">
                                        <h5 class="mb-1"><i class="typcn typcn-archive mr-1"></i>Saidas</h5>
                                        <h2 class="text-secondary mb-1 font-weight-bold">13,221</h2>
                                    </div>
                                    <div class="mr-md-5 mb-4">
                                        <h5 class="mb-1"><i class="typcn typcn-tags mr-1"></i>Lucros</h5>
                                        <h2 class="text-warning mb-1 font-weight-bold">1,542</h2>
                                    </div>
                                </div>
                                <canvas id="salesanalyticChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 d-flex grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-wrap justify-content-between">
                            <h4 class="card-title mb-3">Estado das metas</h4>
                        </div>
                        <div class="mt-2">
                            <div class="d-flex justify-content-between">
                                <small>Order Value</small>
                                <small>155.5%</small>
                            </div>
                            <div class="progress progress-md  mt-2">
                                <div class="progress-bar bg-secondary" role="progressbar" style="width: 80%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <div class="d-flex justify-content-between">
                                <small>Total Products</small>
                                <small>238.2%</small>
                            </div>
                            <div class="progress progress-md  mt-2">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="mt-4 mb-5">
                            <div class="d-flex justify-content-between">
                                <small>Quantity</small>
                                <small>23.30%</small>
                            </div>
                            <div class="progress progress-md mt-2">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <canvas id="salesTopChart"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 d-flex grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-wrap justify-content-between">
                            <h4 class="card-title mb-3">Pagamentos</h4>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex">
                                            <img class="img-sm rounded-circle mb-md-0 mr-2" src="{{asset('assets/images/faces/face30.png')}}" alt="profile image">
                                            <div>
                                                <div> Company</div>
                                                <div class="font-weight-bold mt-1">volkswagen</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        Budget
                                        <div class="font-weight-bold  mt-1">$2322 </div>
                                    </td>
                                    <td>
                                        Status
                                        <div class="font-weight-bold text-success  mt-1">88% </div>
                                    </td>
                                    <td>
                                        Deadline
                                        <div class="font-weight-bold  mt-1">07 Nov 2019</div>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-secondary">edit actions</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex">
                                            <img class="img-sm rounded-circle mb-md-0 mr-2" src="{{asset('assets/images/faces/face31.png')}}" alt="profile image">
                                            <div>
                                                <div> Company</div>
                                                <div class="font-weight-bold  mt-1">Land Rover</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        Budget
                                        <div class="font-weight-bold  mt-1">$12022  </div>
                                    </td>
                                    <td>
                                        Status
                                        <div class="font-weight-bold text-success  mt-1">70% </div>
                                    </td>
                                    <td>
                                        Deadline
                                        <div class="font-weight-bold  mt-1">08 Nov 2019</div>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-secondary">edit actions</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex">
                                            <img class="img-sm rounded-circle mb-md-0 mr-2" src="{{asset('assets/images/faces/face32.png')}}" alt="profile image">
                                            <div>
                                                <div> Company</div>
                                                <div class="font-weight-bold  mt-1">Bentley </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        Budget
                                        <div class="font-weight-bold  mt-1">$8,725</div>
                                    </td>
                                    <td>
                                        Status
                                        <div class="font-weight-bold text-success  mt-1">87% </div>
                                    </td>
                                    <td>
                                        Deadline
                                        <div class="font-weight-bold  mt-1">11 Jun 2019</div>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-secondary">edit actions</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex">
                                            <img class="img-sm rounded-circle mb-md-0 mr-2" src="{{asset('assets/images/faces/face33.png')}}" alt="profile image">
                                            <div>
                                                <div> Company</div>
                                                <div class="font-weight-bold  mt-1">Morgan </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        Budget
                                        <div class="font-weight-bold  mt-1">$5,220 </div>
                                    </td>
                                    <td>
                                        Status
                                        <div class="font-weight-bold text-success  mt-1">65% </div>
                                    </td>
                                    <td>
                                        Deadline
                                        <div class="font-weight-bold  mt-1">26 Oct 2019</div>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-secondary">edit actions</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex">
                                            <img class="img-sm rounded-circle mb-md-0 mr-2" src="{{asset('assets/images/faces/face34.png')}}" alt="profile image">
                                            <div>
                                                <div> Company</div>
                                                <div class="font-weight-bold  mt-1">volkswagen</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        Budget
                                        <div class="font-weight-bold  mt-1">$2322 </div>
                                    </td>
                                    <td>
                                        Status
                                        <div class="font-weight-bold text-success mt-1">88% </div>
                                    </td>
                                    <td>
                                        Deadline
                                        <div class="font-weight-bold  mt-1">07 Nov 2019</div>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-secondary">edit actions</button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
@endsection
