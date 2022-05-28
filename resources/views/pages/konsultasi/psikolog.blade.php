@extends('layouts.layout')

<!-- by Hasna Dhiya Nafitra -->
@section('content')
<!-- Background image -->
<img src="" alt="">

<div class="container-fluid">
    <h2 class="text-center py-3">Choose Psychologist</h2>
    <!-- Row 1 -->
    <div class="row justify-content-evenly p-5">
        <div class="col-sm">
            <div class="row">
                <div class="col-md-auto">
                    <img src="{{ asset('img/psikolog-1.png') }}" alt="" style="width: 100px;">
                </div>
                <div class="col p-3 rounded " style="background-color:#E5D9D0;">
                    <strong>Ani Suhandini S.Psi.</strong>
                    <p>Psychologist</p>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="row">
                <div class="col-md-auto">
                    <img src="{{ asset('img/psikolog-0.png') }}" alt="" style="width: 100px;">
                </div>
                <div class="col p-3 rounded" style="background-color:#E5D9D0;">
                    <strong>Name</strong>
                    <p>Psychologist</p>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="row">
                <div class="col-md-auto">
                    <img src="{{ asset('img/psikolog-0.png') }}" alt="" style="width: 100px;">
                </div>
                <div class="col p-3 rounded" style="background-color:#E5D9D0;">
                    <strong>Name</strong>
                    <p>Psychologist</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Row 2 -->
    <div class="row justify-content-evenly p-5">
        <div class="col-sm">
            <div class="row">
                <div class="col-md-auto">
                    <img src="{{ asset('img/psikolog-0.png') }}" alt="" style="width: 100px;">
                </div>
                <div class="col p-3 rounded " style="background-color:#E5D9D0;">
                    <strong>Name</strong>
                    <p>Psychologist</p>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="row">
                <div class="col-md-auto">
                    <img src="{{ asset('img/psikolog-0.png') }}" alt="" style="width: 100px;">
                </div>
                <div class="col p-3 rounded" style="background-color:#E5D9D0;">
                    <strong>Name</strong>
                    <p>Psychologist</p>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="row">
                <div class="col-md-auto">
                    <img src="{{ asset('img/psikolog-0.png') }}" alt="" style="width: 100px;">
                </div>
                <div class="col p-3 rounded" style="background-color:#E5D9D0;">
                    <strong>Name</strong>
                    <p>Psychologist</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Row 3 -->
    <div class="row justify-content-evenly p-5">
        <div class="col-sm">
            <div class="row">
                <div class="col-md-auto">
                    <img src="{{ asset('img/psikolog-1.png') }}" alt="" style="width: 100px;">
                </div>
                <div class="col p-3 rounded " style="background-color:#E5D9D0;">
                    <strong>Name</strong>
                    <p>Psychologist</p>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="row">
                <div class="col-md-auto">
                    <img src="{{ asset('img/psikolog-0.png') }}" alt="" style="width: 100px;">
                </div>
                <div class="col p-3 rounded" style="background-color:#E5D9D0;">
                    <strong>Name</strong>
                    <p>Psychologist</p>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="row">
                <div class="col-md-auto">
                    <img src="{{ asset('img/psikolog-0.png') }}" alt="" style="width: 100px;">
                </div>
                <div class="col p-3 rounded" style="background-color:#E5D9D0;">
                    <strong>Name</strong>
                    <p>Psychologist</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Next button -->
    <div class="d-flex justify-content-center ">
        <button type="submit" class="btn mb-5 text-white btn-lg btn-block" style="background-color: #a4a3ff; width:374px; border-radius: 38px">
            NEXT
        </button>
    </div>


</div>
@endsection