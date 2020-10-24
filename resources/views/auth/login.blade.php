<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="{{asset('assets/images/smart/Logo/smartwater.png')}}">
    <link rel="stylesheet" href="{{asset('assets/css/reset.css')}}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/bed30b58b0.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <title>SMART WATER</title>
</head>
    <style type="text/css">
        body {
            background-image: url({{asset('assets/images/smart/background.jpg')}});
        }
        .myForm .myHeader .headerLogo{
            background-image: url({{asset('assets/images/smart/Logo/smartwater.png')}});
        }
    </style>

    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors />
        <body>
            <div class="container">
                <div class="myLogin text-center">
                    @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form class="myForm text-center" method="POST" action="{{ route('login') }}">
                        @csrf
                        <header class="myHeader text-center">
                            <div class="headerLogo"></div>
                            <p>SMART WATER</p>
                        </header>
                        <div class="form-group">
                            <i class="fas fa-envelope"></i>
                                <x-jet-input id="email" class="block mt-1 w-full myInput" placeholder="Email" type="email" name="email" :value="old('email')" required autofocus />

                        <!--    <i class="fas fa-envelope"></i>
                            <input class="myInput" type="email" placeholder="Email" id="email" :value="old('email')" required autofocus /> -->
                        </div>

                        <!--   <div class="form-group">
                            <i class="fas fa-lock"></i>
                            <input class="myInput" type="password" placeholder="Password" id="password" required autocomplete="current-password" />
                        </div> -->

                        <div class="mt-4 form-group">
                            <i class="fas fa-lock"></i>
                            <x-jet-input id="password" class="block mt-1 w-full myInput" type="password" name="password" placeholder="Password" required autocomplete="current-password" />
                        </div>

                        <x-jet-button class="ml-4 butt_1">
                            Entrar
                        </x-jet-button>

                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}"><small>Esqueci-me do password.</small></a>
                        @endif
                    </form>
                </div>
            </div>
        </body>
    </x-jet-authentication-card>
</html>
