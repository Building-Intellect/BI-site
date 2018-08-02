@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header title">Building Intellect</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Here at Building Intellect we design, build and program your building's HVAC system and controls.
                    <br />
                    <span id='welcome-icon'>
                        <span class="icon fa fa-building fa-lg"></span>
                    </span>
                    <br />
                    For our clients, we go the extra mile to make sure your building gives any occupants exactly what they want automatically.
                    <br />
                    We also tailor our projects to offer more control to your occupants, and work well with customization.
                    <br />
                    To check out our current client projects visit the <a href='/clients'>Clients Page</a>.
                    <br />
                    <span id='welcome-icon'>
                        <span class="icon fa fa-cogs fa-lg"></span>
                    </span>
                    <br />
                    If you are planning a new construction project, or want to re-vitalize an existing building, please <a href='/contact'>Contact Us</a>.
                    <br />
                    <span id='welcome-icon'>
                        <span class="icon fa fa-calendar fa-lg"></span>
                    </span>
                    <br />
                    To create a new work order, or follow up on an existing work order please <a href='/login'>Login to your account</a>.
                    <br />
                    Our ticketing system notifies us right away so you don't have to worry about leaving voicemails.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
