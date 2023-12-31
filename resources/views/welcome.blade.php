<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MyCourse</title>

        <!-- Fonts -->
        {{-- <link rel="preconnect" href="https://fonts.bunny.net"> --}}
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        <!-- Styles -->
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">MyCourse</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              {{-- <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ url('/home') }}">Home</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href={{ route('login') }}>Log in</a>
                            </li>
                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">Register</a>
                            </li>
                            @endif
                        @endauth
                    @endif
                </ul>
              </div> --}}
            </div>
          </nav>
        <main>
            <div class="container">
                <div class="d-flex">
                    <img src="{{ asset('Learning-pana.png') }}" class="w-50" alt="People illustrations by Storyset">
                    <div class="text-center d-flex flex-column justify-content-center align-items-center">
                        <h1>Manage Your Course With MyCourse!</h1>
                        <div class="d-flex flex-column w-50 mt-3">
                            @if (Route::has('login'))
                                @auth
                                    <a type="button" class="btn btn-primary" href={{ url('/home') }}>Home</a>
                                @else
                                    <a type="button" class="btn btn-primary" href={{ route('login') }}>Login</a>
                                    @if (Route::has('register'))
                                    <a type="button" class="btn btn-outline-primary mt-2" href={{ route('register') }}>Register</a>
                                    @endif
                                @endauth
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
