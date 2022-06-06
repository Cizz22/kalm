@extends('layouts.layout')

<!-- by Hasna Dhiya Nafitra -->
@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/layouts/psikolog.css') }}">
@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
@endsection

@section('content')
    <div class="container-fluid bg">
        <h2 class="text-center py-3">Choose Psychologist</h2>

        <form action="{{ route('konsultasi.psikolog.post') }}" method="POST">
            @csrf
            <div class="grid p-5">
                @foreach ($psikolog as $p)
                    <button class="btn-psikolog" type="button" style="border: none;" class="text-start"
                        onclick="$('#psikolog-{{ $p->id }}').prop('checked',true)">
                        <div class="col-sm">
                            <div class="row">
                                <div class="col-md-auto">
                                    <img src="{{ asset('img/psikolog-1.png') }}" alt="" style="width: 100px;">
                                </div>
                                <div class="col p-3 rounded" style="background-color:#E5D9D0;">
                                    <strong>{{ $p->name }}</strong>
                                    <p>Psychologist</p>
                                </div>
                            </div>
                        </div>
                    </button>
                    <input type="radio" style="display:none; cursor: pointer;" name="psikolog_id"
                        value="{{ $p->id }}" id="psikolog-{{ $p->id }}" />
                @endforeach
            </div>
            <div class="d-flex justify-content-center ">
                <button type="submit" class="btn mb-5 text-white btn-lg btn-block next-btn active"
                    style="background-color: #a4a3ff; width:374px; border-radius: 38px;">
                    NEXT
                </button>
            </div>
        </form>

        <!-- Row 1 -->
        {{-- <div class="row justify-content-evenly p-5">
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
    </div> --}}



    </div>
@endsection
