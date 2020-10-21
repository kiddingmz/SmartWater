@extends('base.main-layout')

@section('content')
    <div class="content-wrapper">
        <div class="row p-4">
            <div class="col-lg-12">
                <div class="card m-4">
                    <div class="card-body">
                        <h4 class="card-title">Registar entrada</h4>
                        <form class="cmxform" id="signupForm" method="POST" action="{{route('incomes.store')}}">
                            @csrf
                            <fieldset>
                                <div class="form-group">
                                    <label for="title">Titulo</label>
                                    <input id="title" required class="form-control @error('title') is-invalid @enderror" type="text" name="title" value="{{old('title')}}">
                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="amount">Motante (Valor)</label>
                                    <input id="amount" required class="form-control @error('amount') is-invalid @enderror" type="number" name="amount" value="{{old('amount')}}">
                                    @error('amount')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="description">Descrição</label>
                                    <input id="description" class="form-control @error('description') is-invalid @enderror" type="text" name="description" value="{{old('description')}}">
                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="from">Origem (Cliente)</label>
                                    <input id="from" class="form-control @error('from') is-invalid @enderror" type="text" name="from" value="{{old('from')}}">
                                    @error('from')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="to">Destino (Referência)</label>
                                    <input id="to"  class="form-control @error('to') is-invalid @enderror" type="text" name="to" value="{{old('to')}}">
                                    @error('to')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <input type="hidden" name="status" value="Confirmado">
                                <input type="hidden" name="user_id" value="{{auth()->id()}}">
                                <input class="btn btn-success" type="submit" value="Adicionar">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
