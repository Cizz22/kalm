{{-- Created by Muhamamd Ridho Waradana 5026201084 --}}

@extends('layouts.layout')
<!-- by fidela nathania -->
@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/layouts/videocall.css') }}">
@endsection


@section('content')
    <div class="container-fluid pt-4">
        <div class="row text-center">
            <h1 class="my-4">Meet your Psychologist</h1>
        </div>
        <div class="row">
            <div class="col-8 justify-content-center">
                <div class="ratio ratio-16x9">
                        <video-chat :user="{{ $user }}" :others="{{ $psikolog }}" pusher-key="{{ config('broadcasting.connections.pusher.key') }}" pusher-cluster="{{ config('broadcasting.connections.pusher.options.cluster') }}"></video-chat>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="d-flex flex-row justify-content-between p-3 text-white" style="background-color: #8E97FD;">
                        <i class="fas fa-chevron-left"></i>
                        <span class="pb-3">Live chat</span>
                        <i class="fas fa-times"></i>
                    </div>
                    <div class="d-flex flex-row p-3">
                        <img src="https://img.icons8.com/color/48/000000/circled-user-female-skin-type-7.png" width="30"
                            height="30">
                        <div class="chat ml-2 p-3">Hello and thankyou for visiting birdlymind. Please click the video
                            above</div>
                    </div>

                    <div class="d-flex flex-row p-3 justify-content-end">
                        <div class="bg-white mr-2 p-3"><span class="text-muted">Hello and thankyou for visiting
                                birdlynind.</span></div>
                        <img src="https://img.icons8.com/color/48/000000/circled-user-male-skin-type-7.png" width="30"
                            height="30">
                    </div>

                    <div class="d-flex flex-row p-3">
                        <img src="https://img.icons8.com/color/48/000000/circled-user-female-skin-type-7.png" width="30"
                            height="30">
                        <div class="myvideo ml-2"><img src="{{ asset('img/logo-kalm.png') }}" width="200"></div>
                    </div>

                    <div class="d-flex flex-row p-3">
                        <img src="https://img.icons8.com/color/48/000000/circled-user-female-skin-type-7.png" width="30"
                            height="30">
                        <div class="chat ml-2 p-3"><span class="text-muted dot">. . .</span></div>
                    </div>

                    <div class="form-group px-3">
                        <textarea class="form-control" rows="2" placeholder="Type your message"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center text-center my-4">
            <a href="/" class="btn rounded-pill px-6 py-3 text-light w-25 hover" style="background-color: #F05D48;">End
                Call</a>
        </div>
    </div>
@endsection

@section('script')
<script src="{{mix('js/app.js')}}"></script>
@endsection
