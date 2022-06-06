{{-- page pilih paket konsultasi : Hajdah Aleyda --}}
@extends('layouts.layout') @section('stylesheet')
<link rel="stylesheet" href="{{ asset('css/layouts/paket.css') }}"> @endsection
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

    <form>
    <div class="list-group mid-center mb-8 mt-10">
<<<<<<< HEAD
        <a href="#" class="list-group-item list-group-item-action list-group-item-dark rounded-3 mb-2 active" data-bs-toggle ="list">
            <div class="fw-bold">Calm</div>
=======
        <form action="{{route('konsultasi.post')}}" method="post">
        @csrf
        @foreach ($paket as $p)
        <button onclick="$('#paket-{{ $p->id }}').prop('checked',true)" type="button" class="list-group-item list-group-item-action list-group-item-dark rounded-3 mb-2">
            <div class="fw-bold">{{$p->nama}}</div>
>>>>>>> a280fa5000cb3e7291fbfd44f3acde8bce01e252
            <div class="d-flex w-100 justify-content-between">
                <p class="mb-0">Total Consult Session : 1</p>
                <span class="d-flex justify-content-between badge bg-primary rounded-pill mb-2">{{$p->harga}}</span>
              </div>
            {{-- <div class="fw-bold">Calm</div>
            <div class="d-flex w-100 justify-content-between">
                Cras justo odio
            <span class="d-flex justify-content-between badge bg-primary rounded-pill">Rp.280.000</span>
            </div> --}}
<<<<<<< HEAD
            </a>
        {{-- <div class="row">
           <a href="#" class="list-group-item list-group-item-action list-group-item-dark rounded-3 mb-2">
           <div class="col-8">Calm</div>
           <span class="badge bg-primary rounded-pill">Rp.280.000</span>
           {{-- Total Consult Session : 1 &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Rp280.000</p>
        </a>
        </div> --}}
        <a href="#" class="list-group-item list-group-item-action list-group-item-dark rounded-3 mb-2" data-bs-toggle ="list">
            <div class="fw-bold">Relax</div>
            <div class="d-flex w-100 justify-content-between">
                <p class="mb-0">Total Consult Session : 4</p>
                <span class="d-flex justify-content-between badge bg-primary rounded-pill mb-2">Rp.380.000</span>
              </div>
            {{-- <div class="fw-bold">Calm</div>
            <div class="d-flex w-100 justify-content-between">
                Cras justo odio
            <span class="d-flex justify-content-between badge bg-primary rounded-pill">Rp.280.000</span>
            </div> --}}
            </a>
            <a href="#" class="list-group-item list-group-item-action list-group-item-dark rounded-3 mb-2" data-bs-toggle ="list">
                <div class="fw-bold">Peace</div>
                <div class="d-flex w-100 justify-content-between">
                    <p class="mb-0">Total Consult Session : 12</p>
                    <span class="d-flex justify-content-between badge bg-primary rounded-pill mb-2">Rp1.230.000</span>
                  </div>
                {{-- <div class="fw-bold">Calm</div>
                <div class="d-flex w-100 justify-content-between">
                    Cras justo odio
                <span class="d-flex justify-content-between badge bg-primary rounded-pill">Rp.280.000</span>
                </div> --}}
                </a>
                <a href="#" class="list-group-item list-group-item-action list-group-item-dark rounded-3 mb-2" data-bs-toggle ="list">
                    <div class="fw-bold">Serenity</div>
                    <div class="d-flex w-100 justify-content-between">
                        <p class="mb-0">Total Consult Session : 36</p>
                        <span class="d-flex justify-content-between badge bg-primary rounded-pill mb-2">Rp2.999.000</span>
                      </div>
                    {{-- <div class="fw-bold">Calm</div>
                    <div class="d-flex w-100 justify-content-between">
                        Cras justo odio
                    <span class="d-flex justify-content-between badge bg-primary rounded-pill">Rp.280.000</span>
                    </div> --}}
                    </a>
=======
            </button>
            <input type="radio" style="cursor: pointer;" name="paket_id" value="{{ $p->id }}" id="paket-{{ $p->id }}" />
        @endforeach
>>>>>>> a280fa5000cb3e7291fbfd44f3acde8bce01e252
      </div>
    </form>

    <!-- Next button -->
    <div class="bottom-center">
        <button type="submit" class="btn">
            Apply Package
        </button>
    </div>
<<<<<<< HEAD
=======
</form>
    <!-- <div class="row d-flex justify-content-center">
        <div class="col-md-6"> -->


    <!-- </body> -->


    <!-- Bootstrap datepicker CSS -->
>>>>>>> a280fa5000cb3e7291fbfd44f3acde8bce01e252
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" />

    <!-- Bootstrap datepicker JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    @endsection

