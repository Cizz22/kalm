@extends('layouts.layout')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col pt-5 left">
                <h2>Good Morning, {{ Auth::user()->name }}</h2>
                <h5>We Wish you have a good day</h5>

                <div class="lagu p-4">
                    <h4 style="color: white;">Focus Attention</h4>
                    <div class="d-flex align-items-start">
                        <p class="p-0 m-0" style="color: white; font-size: 1rem; width:10em;"> Currently Playing <span
                                class="ms-1">
                                </span>
                                <br>
                                <span class="d flex"> 3 - 10 min</span> </p>

                        <button type="button" class="btn play-btn hover"><i class="fas fa-play-circle"
                                style="color: white;"></i></button>
                    </div>
                </div>

                <div class="session mt-5">
                    <h2>Your Session</h2>
                    @forelse ($konsultasi as $k)
                        <div class="lagu p-4">
                            <h4 style="color: white;">Session</h4>
                            <div class="d-flex align-items-center">
                                <p class="p-1" style="color: white; font-size: 15px; width :7em;">{{ $k->jadwal }}</p>
                                <a href="{{ route('konsultasi.videocall', ['id' => $k->id]) }}"><button type="button"
                                        class="btn btn-success hover">Start</button></a>
                            </div>
                        </div>
                    @empty
                        <h5>You don’t have any session. Make it one!</h5>
                    @endforelse
                </div>
            </div>
            <div class="col pt-5 mt-5 pb-4">
                <div class="container">
                    <h2>Recommended for you</h2>
                    <div class="row ">
                        <div class="col">
                            <img class="image" src="{{ asset('img/home1.png') }}" alt="" srcset="">
                            <h5 class="mt-2 mb-0">How to gain your happiness </h5>
                            <small>Article</small>
                        </div>
                        <div class="col">
                            <img class="image" src="{{ asset('img/home2.png') }}" alt="" srcset="">
                            <h5 class="mt-2 mb-0">What is meditation?</h5>
                            <small>Article</small>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <img class="image" src="{{ asset('img/home3.png') }}" alt="" srcset="">
                            <h5 class="mt-2 mb-0">Get Better Sleep 101</h5>
                            <small>Article</small>
                        </div>
                        <div class="col">
                            <img class="image" src="{{ asset('img/home4.png') }}" alt="" srcset="">
                            <h5 class="mt-2 mb-0">Improve Performance</h5>
                            <small>Article</small>

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
