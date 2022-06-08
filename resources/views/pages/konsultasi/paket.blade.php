{{-- page pilih paket konsultasi : Hajdah Aleyda --}}
@extends('layouts.layout')

@section('stylesheet')
<link rel="stylesheet" href="{{ asset('css/layouts/paket.css') }}">
@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
@endsection

@section('content')
<!-- Background image -->

<!-- <body> -->
<div class="container-fluid">
    <img src="{{ asset('img/all-bg.png') }}" alt="" style="width:100%;">
    <h2 class="top-center mb-3">Paket Konsultasi</h2>

    <!-- Package -->
    {{-- <div class="list-group mid-center mb-3">
        <a href="#" class="list-group-item list-group-item-action px-3 border-0 rounded-3 mb-2  list-group-item-dark">A simple dark list group item</a>
        <a href="#" class="list-group-item list-group-item-action px-3 border-0 rounded-3 mb-2  list-group-item-dark">A simple dark list group item</a>
        <a href="#" class="list-group-item list-group-item-action px-3 border-0 rounded-3 mb-2  list-group-item-dark">A simple dark list group item</a>
        <a href="#" class="list-group-item list-group-item-action px-3 border-0 rounded-3 mb-2  list-group-item-dark">A simple dark list group item</a>
        <!-- Schedule input -->
    </div> --}}

    <form action="{{route('konsultasi.post')}}" method="post">
    <div class="list-group mid-center mb-8 mt-10">
        @csrf
        @foreach ($paket as $p)
        <button onclick="$('#paket-{{ $p->id }}').prop('checked',true)" type="button" class="list-group-item list-group-item-action list-group-item-dark rounded-3 mb-2">
            <div class="fw-bold">{{$p->nama}}</div>
            <div class="d-flex w-100 justify-content-between">
                <p class="mb-0">Total Consult Session : 1</p>
                <span class="d-flex justify-content-between badge bg-primary rounded-pill mb-2">{{$p->harga}}</span>
              </div>
            {{-- <div class="fw-bold">Calm</div>
            <div class="d-flex w-100 justify-content-between">
                Cras justo odio
            <span class="d-flex justify-content-between badge bg-primary rounded-pill">Rp.280.000</span>
            </div> --}}
            </button>
            <input type="radio" style="cursor: pointer;display:none;" name="paket_id" value="{{ $p->id }}" id="paket-{{ $p->id }}" />
        @endforeach
        @error('paket_id')
      <div class="py-3 mt-3 alert alert-danger w-75 mx-auto ">
          Choose a package first
      </div>
      @enderror

      </div>

      <div class="bottom-center">
        <button type="submit" class="btn">
            APPLY PACKAGE
        </button>
    </div>
    </form>

    <!-- Next button -->

    <!-- <div class="row d-flex justify-content-center">
        <div class="col-md-6"> -->


    <!-- </body> -->


    <!-- Bootstrap datepicker CSS -->
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" />

    <!-- Bootstrap datepicker JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script> --}}
    @endsection

