@extends('layouts.layout')

<!-- by Hasna Dhiya Nafitra -->
@section('stylesheet')
<link rel="stylesheet" href="{{ asset('css/layouts/meditasi.css') }}"> @endsection

@section('content')
<!-- Background image -->
<!-- <img src="{{ asset('img/meditate-bg.png') }}" alt="" style="width:100%;"> -->

<div class="container-fluid">
    <h2 class="text-center py-3">Meditation</h2>
    <span class="text-center" style="color:#A0A3B1">
        We can learn how to recognize when our minds are doing their normal everyday acrobatics.
    </span>

    <div class="row">
            <div class="d-flex flex-row justify-content-center gap-4">
                <button class="btn btn-secondary rounded-lg meditation-btn hover"
                    style="width:60px; height: 60px;"><i class="fa-solid fa-fan"></i></button>
                <button class="btn btn-secondary rounded-lg meditation-btn hover"
                    style="width:60px; height: 60px;"><i class="fa-regular fa-heart"></i></button>
                <button class="btn btn-secondary rounded-lg meditation-btn hover"
                    style="width:60px; height: 60px;"><i class="fa-regular fa-face-frown"></i></button>
                <button class="btn btn-secondary rounded-lg meditation-btn hover"
                    style="width:60px; height: 60px;"><i class="las la-bed"></i></button>
                <button class="btn btn-secondary rounded-lg meditation-btn hover"
                    style="width:60px; height: 60px;"><i class="las la-bed"></i></button>

            </div>
        </div>
    <div class="d-flex flex-row">


    </div>
</div>
 @endsection
