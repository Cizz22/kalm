@extends('layouts.layout')
<!-- by fidela nathania -->
@section('stylesheet')
<link rel="stylesheet" href="{{ asset('css/layouts/konsultasi.css') }}"> @endsection


@section('content')
<div class="flex-container">
    <!-- Background image -->
    <img src="{{ asset('img/all-bg.png') }}" alt="" style="width:100%;">
    <h2 class="top-center">Topik Konsultasi</h2>

    <!-- Schedule input -->
    <div class="mid-center mb-3">
        <label class="form-label" for="topic">Topic</label>
        <select class="form-select">
            <option value="" selected disabled hidden>Choose Your Topic</option>
            <option value="1">Mental health</option>
            <option value="2">Stress</option>
            <option value="3">Demotivated</option>
            <option value="4">Self-growth</option>
            <option value="5">Healthy food</option>
        </select>
    </div>


        <!-- Schedule input -->
        <div class="mb-3">
            <label for="date" class="col-1 col-form-label">Schedule</label>
            <div class="col-12">
                <div class="input-group date" id="datepicker">
                    <input type="text" class="form-control" id="date" />
                    <span class="input-group-append">
                        <span class="input-group-text bg-light d-block">
                            <i class="fa fa-calendar"></i>
                        </span>
                    </span>
                </div>
            </div>
        </div>

    </div>

    <!-- Next button -->
    <div class="bottom-center">
        <button type="submit" class="btn mb-3">
            NEXT
        </button>
    </div>
</div>
<script src="{{ asset('js/app.js') }}"></script>
@endsection
