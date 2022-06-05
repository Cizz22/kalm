@extends('layouts.layout')

<!-- by Hasna Dhiya Nafitra -->
@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/layouts/meditasi.css') }}">
@endsection

@section('content')
    <div class="container-fluid">
        <!-- Background image -->
        {{-- <img src="{{ asset('img/meditate-bg.png') }}" alt="" style="width:100%;"> --}}
        <h2 class="text-center py-3">Meditation</h2>
        <p class="text-center" style="color:#A0A3B1">
            We can learn how to recognize when our minds are doing their normal everyday acrobatics.
        </p>
        <div class="container">

            <div class="row">
                {{-- <div class="d-flex flex-row justify-content-center meditation-btn-group"> --}}
                <div class="meditation-btn-group">
                    <button class="btn btn-secondary rounded-lg meditation-btn hover" style="width:60px; height: 60px;"><i
                            class="fa-solid fa-fan"></i></button>
                    <button class="btn btn-secondary rounded-lg meditation-btn hover" style="width:60px; height: 60px;"><i
                            class="fa-regular fa-heart"></i></button>
                    <button class="btn btn-secondary rounded-lg meditation-btn hover" style="width:60px; height: 60px;"><i
                            class="fa-regular fa-face-frown"></i></button>
                    <button class="btn btn-secondary rounded-lg meditation-btn hover" style="width:60px; height: 60px;"><i
                            class='bx bx-bed bx-flip-horizontal'></i></i></button>
                    <button class="btn btn-secondary rounded-lg meditation-btn hover" style="width:60px; height: 60px;"><i
                            class="fa-solid fa-child"></i></i></button>

                </div>
            </div>
            <div class="container-fluid">
                <div class="row med-page-1">
                    <div class="col align-self-center">
                        <img src="{{ asset('img/meditate 0.png') }}" alt="" class="mx-auto d-block">
                    </div>
                    <div class="col d-flex flex-column align-self-center">
                        {{-- <img src="{{ asset('img/meditate 1.png') }}" alt="" style="width: 60%" class="mx-auto d-block">
                    <img src="{{ asset('img/meditate 2.png') }}" alt="" style="width: 60%" class="mx-auto d-block mt-4"> --}}
                        <div class="meditate-article1  overflow-hidden d-flex align-items-end" style="border-radius: 10px;">
                            <div class="article-title px-2" style="backdrop-filter: blur(10px); width:100%;">
                                <p class="mt-3 mb-2">7 Days of Calm</p>
                            </div>
                        </div>
                        <div class="meditate-article2  overflow-hidden d-flex align-items-end" style="border-radius: 10px;">
                            <div class="article-title px-2" style="backdrop-filter: blur(10px); width:100%;">
                                <p class="mt-3 mb-2">Anxiety Release</p>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex flex-column align-self-center">
                        {{-- <img src="{{ asset('img/meditate 3.png') }}" alt="" style="width: 32%" class="mx-auto d-block">
                    <img src="{{ asset('img/meditate 4.png') }}" alt="" style="width: 32%" class="mx-auto d-block mt-4"> --}}
                        <div class="meditate-article3  overflow-hidden d-flex align-items-end" style="border-radius: 10px;">
                            <div class="article-title px-2" style="backdrop-filter: blur(10px); width:100%;">
                                <p class="mt-3 mb-2">Focus Attention</p>
                            </div>
                        </div>
                        <div class="meditate-article4  overflow-hidden d-flex align-items-end" style="border-radius: 10px;">
                            <div class="article-title px-2" style="backdrop-filter: blur(10px); width:100%;">
                                <p class="mt-3 mb-2">How to Meditate</p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
