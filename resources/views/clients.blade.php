@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header title">Clients</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
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