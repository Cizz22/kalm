@extends('layouts.layout')

<!-- by Hasna Dhiya Nafitra -->
@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/layouts/meditasi.css') }}">
@endsection

@section('content')
    <div class="container-fluid bg">
        <h2 class="text-center my-2 pt-4">Meditation</h2>
        <p class="text-center" style="color:#A0A3B1">
            We can learn how to recognize when our minds are doing their normal everyday acrobatics.
        </p>
        <div class="container">
            <div class="row">
                <div class="meditation-btn-group my-1">
                    <ul class="nav nav-tabs justify-content-start flex-row m-0 p-0 gap-4" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="btn  rounded-lg meditation-btn nav-link active" data-bs-toggle="tab"
                                data-bs-target="#meditate-tab-1" type="button" role="tab"
                                style="width:60px; height: 60px;"><i class="fa-solid fa-fan"></i></button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="btn rounded-lg meditation-btn" data-bs-toggle="tab"
                                data-bs-target="#meditate-tab-2" type="button" role="tab"
                                style="width:60px; height: 60px;"><i class="fa-regular fa-heart"></i></button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="btn rounded-lg meditation-btn" data-bs-toggle="tab"
                                data-bs-target="#meditate-tab-3" type="button" role="tab"
                                style="width:60px; height: 60px;"><i class="fa-regular fa-face-frown"></i></button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="btn rounded-lg meditation-btn" data-bs-toggle="tab"
                                data-bs-target="#meditate-tab-4" type="button" role="tab"
                                style="width:60px; height: 60px;"><i class='bx bx-bed bx-flip-horizontal'></i></button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="btn rounded-lg meditation-btn" data-bs-toggle="tab"
                                data-bs-target="#meditate-tab-5" type="button" role="tab"
                                style="width:60px; height: 60px;"><i class="fa-solid fa-child"></i></i></button>
                        </li>
                    </ul>
                </div>
            </div>
            {{-- Isi konten per tab --}}
            <div class="container-fluid">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="meditate-tab-1" role="tabpanel" aria-labelledby="calm-tab"
                        tabindex="0">
                        <div class="row med-tab">
                            <div class="col d-flex flex-column align-self-center">
                                <div class="meditate-article0  overflow-hidden d-flex flex-column align-items-start "
                                    style="border-radius: 10px;">
                                    <div class="article-title px-2">
                                        <h3 class="mt-5 mx-3" style="color: #3F414E">Daily Calm</h3>
                                        <h6 class="mx-3" style="color: #5A6175">April 30 &bull; PAUSE PRACTICE
                                        </h6>
                                    </div>
                                    <div class="align-items-center ">
                                        <button class="btn play-btn"><i class="fa-solid fa-circle-play"
                                                style="font-size: 60px"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex flex-column align-self-center">
                                <div class="meditate-article1  overflow-hidden d-flex align-items-end"
                                    style="border-radius: 10px;">
                                    <div class="article-title px-2" style="backdrop-filter: blur(10px); width:100%;">
                                        <p class="mt-3 mb-2">7 Days of Calm</p>
                                    </div>
                                </div>
                                <div class="meditate-article2  overflow-hidden d-flex align-items-end"
                                    style="border-radius: 10px;">
                                    <div class="article-title px-2" style="backdrop-filter: blur(10px); width:100%;">
                                        <p class="mt-3 mb-2">Anxiety Release</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex flex-column align-self-center">
                                <div class="meditate-article3  overflow-hidden d-flex align-items-end"
                                    style="border-radius: 10px;">
                                    <div class="article-title px-2" style="backdrop-filter: blur(10px); width:100%;">
                                        <p class="mt-3 mb-2">Focus Attention</p>
                                    </div>
                                </div>
                                <div class="meditate-article4  overflow-hidden d-flex align-items-end"
                                    style="border-radius: 10px;">
                                    <div class="article-title px-2" style="backdrop-filter: blur(10px); width:100%;">
                                        <p class="mt-3 mb-2">How to Meditate</p>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="meditate-tab-2" role="tabpanel" aria-labelledby="favourite-tab"
                        tabindex="0">
                        <div class="row med-tab">
                            <div class="lagu p-4">
                                <h4 style="color: white;">Focus Attention</h4>
                                <div class="d-flex flex-col align-items-center">
                                    <p class="p-0 m-0" style="color: white; font-size: 1.25rem;"> Currently Playing
                                        <span class="ms-3">
                                            &#9679;</span> <span class="ms-3">
                                            3 - 10 min</span>
                                    </p>

                                    <button type="button" class="btn play-btn hover"><i class="fas fa-play-circle"
                                            style="color: white;"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="meditate-tab-3" role="tabpanel" aria-labelledby="favourite-tab"
                        tabindex="0">
                        <div class="row med-tab"></div>
                    </div>
                    <div class="tab-pane fade" id="meditate-tab-4" role="tabpanel" aria-labelledby="favourite-tab"
                        tabindex="0">
                        <div class="row med-tab"></div>
                    </div>
                    <div class="tab-pane fade" id="meditate-tab-5" role="tabpanel" aria-labelledby="favourite-tab"
                        tabindex="0">
                        <div class="row med-tab"></div>
                    </div>
                </div>

            </div>
        </div>
        <div class="d-flex justify-content-center ">
            <button type="submit" class="btn mb-5 text-white btn-lg btn-block next-btn"
                style="background-color: #a4a3ff; width:374px; border-radius: 38px">
                NEXT
            </button>
        </div>
    </div>
@endsection
