@extends('layout.master')

@section('main')

        <div class="container">
            <div class="content">
                <div class="text-center new-font">Laravel 5</div>
            </div>

            <div class="row">
                <div class="col-md-12">
                <h1 class= "text-center">Login Here!</h1>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-md-6">
                    <a class="btn btn-primary" href="{{ url('/home') }}">Login </a>
                </div>
                <div class="col-md-6">
                    <button class="btn btn-default">Sign Up</button>
                </div>
            </div>
            </div>

@endsection

