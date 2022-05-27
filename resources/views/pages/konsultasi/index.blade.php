@extends('layouts.layout') @section('stylesheet')
<link rel="stylesheet" href="{{ asset('css/layouts/konsultasi.css') }}"> @endsection @section('content')
<!-- Background image -->

<!-- <body> -->
<div class="container-fluid">
    <img src="{{ asset('img/all-bg.png') }}" alt="" style="width:100%;">
    <h2 class="top-center">Konsultasi</h2>

    <!-- Topic input -->
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


        <!-- Schedule input -->
        <div class="mb-3">
            <label for="date" class="col-1 col-form-label">Schedule</label>
            <div class="col-5">
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
            Next
        </button>
    </div>
    <!-- <div class="row d-flex justify-content-center">
        <div class="col-md-6"> -->


    <!-- </body> -->


    <!-- Bootstrap datepicker CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" />

    <!-- Bootstrap datepicker JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    @endsection
