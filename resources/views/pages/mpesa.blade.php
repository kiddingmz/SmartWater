@extends('base.main-layout')

@section('content')
    <div class="content-wrapper">
        <div class="row p-4">
        <div class="col-lg-12">
            <div class="card m-4">
                <div class="card-body">
                    <h4 class="card-title">Credenciais de MPesa</h4>
                    <form class="cmxform" id="signupForm" method="get" action="#">
                        <fieldset>
                            <div class="form-group">
                                <label for="firstname">Firstname</label>
                                <input id="firstname" class="form-control" name="firstname" type="text">
                            </div>
                            <div class="form-group">
                                <label for="lastname">Lastname</label>
                                <input id="lastname" class="form-control" name="lastname" type="text">
                            </div>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input id="username" class="form-control" name="username" type="text">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input id="password" class="form-control" name="password" type="password">
                            </div>
                            <div class="form-group">
                                <label for="confirm_password">Confirm password</label>
                                <input id="confirm_password" class="form-control" name="confirm_password" type="password">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input id="email" class="form-control" name="email" type="email">
                            </div>
                            <input class="btn btn-primary" type="submit" value="Submit">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
