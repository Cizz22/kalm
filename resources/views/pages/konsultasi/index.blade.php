@extends('layouts.layout')
<!-- by fidela nathania -->
@section('stylesheet')
<link rel="stylesheet" href="{{ asset('css/layouts/konsultasi.css') }}"> @endsection


@section('content')
<div class="flex-container">
    <!-- Background image -->
    <img src="{{ asset('img/all-bg.png') }}" alt="" style="width:100%;">
    <h2 class="top-center">
        <strong>Consultation</strong>
    </h2>

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
    <div class="centered mb-3">
        <label for="date" class="form-label">Schedule</label>
        <table class="table table-borderless">
            <tr>
                <td>
                    <input type="date" class="form-control" id="datetimepicker2" />
                </td>
                <td>
                    <input type="time" class="form-control" id="time" />
                </td>
            </tr>
        </table>
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
