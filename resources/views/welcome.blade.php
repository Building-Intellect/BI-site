@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <!-- Header Carousel -->
                    <header id="welcomeCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#welcomeCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#welcomeCarousel" data-slide-to="1"></li>
                            <li data-target="#welcomeCarousel" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="fill d-block w-100" src="/img/welcome_1.jpg" alt="First slide">
                                <div class="carousel-caption">
                                    <h2>Building Intellect</h2>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="fill d-block w-100" src="/img/welcome_2.jpg" alt="Second slide">
                                <div class="carousel-caption">
                                    <h2>Make your buildings work smarter</h2>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="fill d-block w-100" src="/img/welcome_3.jpg" alt="Third slide">
                                <div class="carousel-caption">
                                    <h2>Optimize your operating energy consumption</h2>
                                </div>
                            </div>
                        </div>
                        <!-- Controls -->
                        <a class="carousel-control-prev" href="#welcomeCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#welcomeCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </header>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col">
                            <br>
                            <span id='welcome-icon'>
                                <span class="icon fa fa-building fa-lg"></span>
                            </span>
                            <br>
                            <br>
                            At Building Intellect we design, build and program your building's HVAC and master control systems.
                        </div>
                        <div class="col">
                            <img class="fill d-block w-75" src="/img/logo_square.png" alt="Building Intellect">
                        </div>
                        <div class="col">
                            <br>
                            <span id='welcome-icon'>
                                <span class="icon fa fa-desktop fa-lg"></span>
                            </span>
                            <br>
                            <br>
                            We give you access to your building's systems through a convenient web interface.
                        </div>
                    </div>
                    <div class="row row-text-break">
                        <br>
                    </div>
                    <div class="row">
                        <div class="col">
                            <img class="fill d-block w-60" src="/img/welcome_4.png" alt="Satisfaction Guaranteed">
                        </div>
                        <div class="col">
                            <br>
                            <span id='welcome-icon'>
                                <span class="icon fa fa-cogs fa-lg"></span>
                            </span>
                            <br>
                            <br>
                            For our clients, we go the extra mile to make sure your building gives
                            any occupants exactly what they want automatically.
                            We also tailor our projects to offer more control to your occupants,
                            and work well with customization.
                            To check out current client projects visit the
                            <br>
                            <h4><a href='/clients'>Clients Page</a>.</h4>
                        </div>
                    </div>
                    <div class="row row-text-break">
                        <br>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            If you are planning a new construction project, or want to retrofit an existing building,
                            <br>
                            <h4>please <a href='/contact'>Contact Us</a>.</h4>
                            <br>
                            <span id='welcome-icon'>
                                <span class="icon fa fa-calendar fa-lg"></span>
                            </span>
                        </div>
                        <div class="col">
                            To create a new work order, or follow up on an existing work order please
                            <br>
                            <h4><a href='/login'>Login to your account</a>.</h4>
                            <br>
                            <span id='welcome-icon'>
                                <span class="icon fa fa-users fa-lg"></span>
                            </span>
                        </div>
                        <div class="col">
                            Our ticketing system notifies us right when you create a new Work Order
                            so you don't have to worry about leaving voicemails.
                            <br>
                            <br>
                            <span id='welcome-icon'>
                                <span class="icon fa fa-envelope fa-lg"></span>
                            </span>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
