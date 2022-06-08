{{-- Created by Muhammad Ridho Waradana 5026201084 --}}

@extends('layouts.layout')

@section('stylesheet')
<link rel="stylesheet" href="{{ asset('css/layouts/user-profile.css') }}">
@endsection

@section('content')
<div class="container-fluid bg">
    <div class="row">
        <div class="col p-0 profile-hero">
            <img src="{{ asset('img/profile-bg.png') }}" class="img-fluid">
            <div class="d-flex flex-column justify-content-center align-middle align-items-center profile-picture">
                <img src="{{ asset('img/foto-profil.png') }}" alt="foto-profil" class="user-picture">
                <h3 class="font-white text-center">{{Auth::user()->name}}</h3>
                <p class="font-white text-center">{{Auth::user()->tipeakun}}</p>
                <small class="font-white text-center">18 y.o. woman with high spirit and motivation</small>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="container-fluid mt-4">
                <div class="row">
                    <div class="col">
                        <div class="d-flex flex-row gap-3">
                            <p><i class="fa-solid fa-headphones" style="color: #7FD2F2;"></i> 3 Listenings</p>
                            <p><i class="fa-solid fa-heart" style="color: #FF84A2;"></i> {{Auth::user()->laguFavorit->count()}} Favourites</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mt-2">
                            <h4>{{ Auth::user()->name }}'s Favourite</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <ul class="nav nav-tabs justify-content-start flex-row m-0 p-0" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="ambient-tab" data-bs-toggle="tab" data-bs-target="#ambient-tab-pane" type="button" role="tab">Ambient Sounds</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#psychologists-tab-pane" type="button" role="tab" aria-controls="psychologists-tab-pane" aria-selected="false">Psychologists</button>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="ambient-tab-pane" role="tabpanel" aria-labelledby="ambient-tab" tabindex="0">
                            <ul class="list-group list-group-flush">
                                @foreach ($favouriteSong as $f)
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span><i class="fa-solid fa-circle-play" style="color: #8E97FD"></i>
                                        <div class="d-inline-flex flex-column">
                                            {{$f->lagu->judul}}
                                            <small class="light-grey">10 min</small>
                                        </div>
                                    </span>
                                    <span class="badge"><i class="fa-solid fa-heart" style="color: #FF84A2;"></i></span>
                                </li>
                                @endforeach


                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span><i class="fa-solid fa-circle-play light-grey"></i>
                                        <div class="d-inline-flex flex-column">
                                            Body Scan
                                            <small class="light-grey">5 min</small>
                                        </div>
                                    </span>
                                    <span class="badge"><i class="fa-solid fa-heart" style="color: #FF84A2;"></i></span>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="ambient-tab-pane" role="tabpanel"
                                aria-labelledby="ambient-tab" tabindex="0">
                                <ul class="list-group list-group-flush">
                                    @foreach ($favouriteSong as $f)
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <span><i class="fa-solid fa-circle-play" style="color: #8E97FD"></i>
                                                <div class="d-inline-flex flex-column">
                                                    {{ $f->lagu->judul }}
                                                    <small class="light-grey">10 min</small>
                                                </div>
                                            </span>
                                            <span class="badge"><i class="fa-solid fa-heart"
                                                    style="color: #FF84A2;"></i></span>
                                        </li>
                                    @endforeach

                        <div class="tab-pane fade" id="psychologists-tab-pane" role="tabpanel" aria-labelledby="psychologists-tab" tabindex="0">
                            <ul class="list-group list-group-flush">
                                @foreach ($psikolog as $p)
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span><i class="fa-solid fa-circle-play" style="color: #8E97FD"></i>
                                        <div class="d-inline-flex flex-column">
                                            {{$p->name}}
                                        </div>
                                    </span>
                                    <span class="badge"><i class="fa-solid fa-heart" style="color: #FF84A2;"></i></span>
                                </li>
                                @endforeach

                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span><i class="fa-solid fa-circle-play light-grey"></i>
                                            <div class="d-inline-flex flex-column">
                                                Body Scan
                                                <small class="light-grey">5 min</small>
                                            </div>
                                        </span>
                                        <span class="badge"><i class="fa-solid fa-heart"
                                                style="color: #FF84A2;"></i></span>
                                    </li>
                                </ul>
                            </div>

                            <div class="tab-pane fade" id="psychologists-tab-pane" role="tabpanel"
                                aria-labelledby="psychologists-tab" tabindex="0">
                                <ul class="list-group list-group-flush">
                                    @foreach ($psikolog as $p)
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <span><i class="fa-solid fa-circle-play" style="color: #8E97FD"></i>
                                                <div class="d-inline-flex flex-column">
                                                    {{ $p->name }}
                                                </div>
                                            </span>
                                            <span class="badge"><i class="fa-solid fa-heart"
                                                    style="color: #FF84A2;"></i></span>
                                        </li>
                                    @endforeach

                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span><i class="fa-solid fa-circle-play light-grey"></i>
                                            <div class="d-inline-flex flex-column">
                                                Johnny Depp
                                                <small class="light-grey">5 min</small>
                                            </div>
                                        </span>
                                        <span class="badge"><i class="fa-solid fa-heart"
                                                style="color: #FF84A2;"></i></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="col-6 mt-4">
            <h4>Completed Courses</h4>
            <div class="container-fluid my-4">
                <div class="row">
                    <div class="col-5">
                        <div class="completed-course  overflow-hidden d-flex align-items-end font-white" style="border-radius: 10px;">
                            <div class="course-title px-2" style="backdrop-filter: blur(10px); width:100%;">
                                <p class="mt-3 mb-2">Focus Attention</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="completed-course  overflow-hidden d-flex align-items-end font-white" style="border-radius: 10px;">
                            <div class="course-title px-2" style="backdrop-filter: blur(10px); width:100%;">
                                <p class="mt-3 mb-2">Focus Attention</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-5">
                        <div class="completed-course  overflow-hidden d-flex align-items-end font-white" style="border-radius: 10px;">
                            <div class="course-title px-2" style="backdrop-filter: blur(10px); width:100%;">
                                <p class="mt-3 mb-2">Focus Attention</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="completed-course  overflow-hidden d-flex align-items-end font-white" style="border-radius: 10px;">
                            <div class="course-title px-2" style="backdrop-filter: blur(10px); width:100%;">
                                <p class="mt-3 mb-2">Focus Attention</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
