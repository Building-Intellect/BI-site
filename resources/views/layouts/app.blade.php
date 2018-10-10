<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Building Intellect</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/temp.css" rel="stylesheet">

    <!--Font Awsome Icons style sheet-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- ReCaptcha-->
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
    <div id="bi-background">
        <div id="app" >
            <nav class="navbar navbar-expand-md navbar-light navbar-laravel" id="bi-nav">
                <div class="container">
                    <button class="navbar-toggler bi-nav-mobile" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link bi-nav-link" id="welcome" href="/">Welcome</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link bi-nav-link" id="clients" href="/clients">Clients</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link bi-nav-link" id="contact" href="/contact">Contact</a>
                            </li>
                            @if (Auth::check())
                                <li class="nav-item">
                                    <a class="nav-link bi-nav-link" id="work-orders" href="/tickets">Work-Orders</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link bi-nav-link" id="products" href="/products">Products</a>
                                </li>
                            @endif
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">

                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link bi-nav-link" id="login" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link bi-nav-link" id="register" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        <strong>{{ Auth::user()->name }}</strong><span class="caret"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>

            <main class="py-4 content">
                @yield('content')
            </main>
            <div id="bi-footer">
                <a class='bi-footer-link' href='https://www.bbb.org/western-washington/business-reviews/electrician/building-intellect-llc-in-bellevue-wa-22784246'>BBB</a>
                <span class="icon fa fa-building fa-lg"></span>
                <a class='bi-footer-link' href='https://www.glassdoor.com/Reviews/Building-Intellect-Bellevue-Reviews-EI_IE1893283.0,18_IL.19,27_IC1150442.htm'>GLASSDOOR</a>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script type="text/javascript" src="/js/behavior.js"></script>
    <script type="text/javascript" src="/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="/js/popper-1.14.3.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.js"></script>
    @yield('footer')
</body>
</html>
