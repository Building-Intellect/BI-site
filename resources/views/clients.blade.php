@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header title">Our Clients</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h3>Do you see your organization on this list?</h3>
                    <span id='clients-icon'>
                        <span class="icon fa fa-book fa-lg"></span>
                    </span>
                    <hr />
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
        </div>
    </div>
</div>
@endsection
