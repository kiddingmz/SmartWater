@extends('base.main-layout')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">
                            Entradas
                            <a href="/admin/incomes/create">
                                <input class="btn btn-success" style="margin-left: 10px" type="submit" value="Adicionar">
                            </a>
                        </h4>
                        <p class="card-description">
                            Add class <code>.table-striped</code>
                        </p>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>
                                        Úsuario
                                    </th>
                                    <th>
                                        Título
                                    </th>
                                    <th>
                                        Progresso
                                    </th>
                                    <th>
                                        Valor
                                    </th>
                                    <th>
                                        Data
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($incomes as $income)
                                        @include('admin.incomes.table-row', $income)
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

