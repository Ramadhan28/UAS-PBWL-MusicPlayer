<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Galada&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Galada&display=swap" rel="stylesheet">
    <style type="text/css">
       .navbar-brand {
        font-family: 'Galada';
        font-size: 33px;
       } 

       .navbar a:hover {
        border-top: 2px solid deepskyblue;
        border-bottom: 6px solid deepskyblue;
        border-style: solid;
        border-bottom-width: 10px
        border-left-width: 14px
        border-color: deepskyblue;

       }

       .navbar a:hover {
        border-solid: 3px solid deepskyblue;
       }

       @import url('https://fonts.googleapis.com/css2?family=Acme');

 li {
    font-size: 20px;
    color: blue;
    position: relative;
    cursor: pointer;
    font-family: acme;
}



li:hover a {
    transform: translateX(0.15em);
    background-color: gold;
}

       

    </style>
</head>
<body style="background-color: powderblue ">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color: khaki">
            <div class="container">
                <div class="logo">
                     <a style="color: navy;" class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
             <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Indie+Flower&family=Montserrat+Subrayada:wght@700&display=swap" rel="stylesheet">
                </div>
               
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbar">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else

                        
                        
                        
                        <li>
                            <a style="color: black" class="nav-link" href="{{ url('/artist')}}">Artist</a> 
                        </li>

                         <li>
                            <a style="color: black" class="nav-link" href="{{ url('/album')}}">Album</a>
                        </li>

                         <li>
                            <a style="color: black" class="nav-link" href="{{ url('/tracks')}}">Tracks</a>
                        </li>

                        <li>
                            <a style="color: black" class="nav-link" href="{{ url('/played')}}">Played</a>
                        </li>
                         
                     
                    
                    </div>


                            <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
                            <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item">
                                    <a style="color: red" class="nav-link disable" href="#"   aria-haspopup="true">
                                    Hi, {{ Auth::user()->name }}<span class="caret"></span>
                                </a>

                            </li>

                            <li>
                                    <a style="color: black" class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                </li>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                
                        
                              </ul>
                        @endguest
                  
                </div>
            </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
