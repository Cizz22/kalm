@extends('layouts.layout')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col pt-5 left">
                <h2>Good Morning, Kezia</h2>
                <h5>We Wish you have a good day</h5>

                <div class="lagu">

                </div>
                <div class="session mt-5">
                    <h2>Your Session</h2>
                    <h5>You don’t have any session. Make it one!</h5>
                </div>
            </div>
            <div class="col pt-5 mt-5 pb-4">
                <div class="container">
                    <h2>Recommended for you</h2>
                    <div class="row ">
                        <div class="col">
                            <img class="image" src="{{ asset('img/home1.png') }}" alt="" srcset="">
                            <h5>How to gain your happiness </h5>
                        </div>
                        <div class="col">
                            <img  class="image" src="{{ asset('img/home2.png') }}" alt="" srcset="">
                            <h5>What is meditation?</h5>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <img class="image" src="{{ asset('img/home3.png') }}" alt="" srcset="">
                            <h5>Get Better Sleep 101</h5>
                        </div>
                        <div class="col">
                            <img class="image" src="{{ asset('img/home4.png') }}" alt="" srcset="">
                            <h5>Improve Performance</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
@endsection

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/layouts/home-landing.css') }}">
@endsection
