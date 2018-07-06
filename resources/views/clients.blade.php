<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Clients</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Style -->
        <link href="/css/style.css" rel="stylesheet">
        <link href="/css/app.css" rel="stylesheet">
    </head>
    <body>
        <div class="links" id="bi-nav">
            <a href="/">Home</a>
            <a id="bi-nav-active">Clients</a>
            <a href="/login">Login</a>
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('register') }}">Register</a>
                @endauth
            @endif
            <a href="/contact">Contact</a>
        </div>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title">Clients</div>
                <div>
                    @foreach($clients as $client)
                        <div class="bi-client">
                            <h2>{{ $client->ClientName }}</h2>
                            <ul>
                                <li>{{ $client->URL }}</li>
                                <li>{{ $client->City }}</li>
                                <li>{{ $client->State }}</li>
                            </ul>
                            <p>{{ $client->Description }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </body>
</html>
