<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Register</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Style -->
        <link href="/css/style.css" rel="stylesheet">
        <link href="/css/app.css" rel="stylesheet">
    </head>
    <body>
        <div class="links" id="bi-nav">
            <a href="/">Home</a>
            <a href="/clients">Clients</a>
            <a href="/login">Login</a>
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a id="bi-nav-active" href="{{ route('register') }}">Register</a>
                @endauth
            @endif
            <a href="/contact">Contact</a>
        </div>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">Register</div>
                <form method="POST" action="/register">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">Username:</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                    <div class="form-group">
                        <label for="name">First Name:</label>
                        <input type="text" class="form-control" id="firstname" name="firstname">
                    </div>
                    <div class="form-group">
                        <label for="name">Last Name:</label>
                        <input type="text" class="form-control" id="lastname" name="lastname">
                    </div>
                    <div class="form-group">
                        <label for="name">Phone Number:</label>
                        <input type="text" class="form-control" id="phonenumber" name="phonenumber">
                    </div>
                    <div class="form-group">
                        <label for="emailaddress">Email:</label>
                        <input type="email" class="form-control" id="emailaddress" name="emailaddress">
                    </div>
                    <div class="form-group">
                        <label for="userpassword">Password:</label>
                        <input type="password" class="form-control" id="userpassword" name="userpassword">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn ntn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
