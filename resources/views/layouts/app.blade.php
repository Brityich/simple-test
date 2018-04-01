<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .footer {
            position: fixed;
            left: 0; bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">
                    {{ config('app.name') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('home') }}">@lang('user.home')
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">@lang('user.about')</a>
                        </li>

                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">@lang('user.login')</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">@lang('user.register')</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                @lang('user.language')<span class="caret"></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ asset('changelang/en') }}">
                                    English
                                </a>
                                <a class="dropdown-item" href="{{ asset('changelang/uk') }}">
                                    Ukrainian
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            @if(MyOptions::getOption('contact_email')==''
                && MyOptions::getOption('contact_name')==''
                && MyOptions::getOption('contact_phone')==''
                && MyOptions::getOption('contact_address')=='')
                <p class="m-0 text-left text-white">Footer</p>
            @else
                <h5 class="text-left text-white">Contact :</h5>
                <p class="m-0 text-left text-white">{{ MyOptions::getOption('contact_email') }}</p>
                <p class="m-0 text-left text-white">{{ MyOptions::getOption('contact_name') }}</p>
                <p class="m-0 text-left text-white">{{ MyOptions::getOption('contact_phone') }}</p>
                <p class="m-0 text-left text-white">{{ MyOptions::getOption('contact_address') }}</p>
            @endif

        </div>
        <!-- /.container -->
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
