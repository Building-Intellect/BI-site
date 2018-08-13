@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header title">Products</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Here at Building Intellect we offer products from a number of excellent vendors.
                    <br />
                    <span id='clients-icon'>
                        <span class="icon fa fa-building fa-lg"></span>
                    </span>
                    <br />
                    More content coming soon.

            </div>
        </div>
    </div>
</div>
@endsection
