@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header title">Contact Us</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Business Inquiries Only.
                    <div class="contact">
                        <form role="form " action="/contact" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="name"></label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" required>
                                <!--placing icon using a span element-->
                                <span class="icon fa fa-user fa-lg"></span>
                            </div>
                            <div class="form-group">
                                <label for="email"></label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required>
                                <span class="icon fa fa-envelope fa-lg"></span>
                            </div>
                            <div class="form-group">
                                <label for="subject"></label>
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                                <span class="icon fa fa-pencil fa-lg"></span>
                            </div>
                            <div class="form-group">
                                <textarea rows="5" cols="30" id="msg" name="msg" placeholder="Message"></textarea>
                                <span class="icon-textarea fa fa-paper-plane fa-lg "></span>
                            </div>
                            @if (Session::has('flash_message'))
                                <div class="alert alert-success">{{ Session::get('flash_message') }}</div>
                            @endif
                            <div class="col-sm-12 text-center">
                                <button type="submit" class="btn btn-default">Submit</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
