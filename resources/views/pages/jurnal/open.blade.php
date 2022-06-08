{{-- Fidela Nathania --}}

@extends('layouts.layout')
@section('stylesheet')
<link rel="stylesheet" href="{{ asset('css/layouts/jurnal.css') }}">
<style>
    .jurnal-body {
        border-radius: 50px 50px 0 0;
        border: none;
        height: 35em;
        max-height: 100%;
    }
</style>
@endsection


@section('content')
<div class="container-fluid bg">
    <form action="{{ route('jurnal.save') }}" method="POST">
        @csrf
        <div class="py-3 px-3">
            <h2>{{$jurnal -> created_at -> format('d-m-Y')}}</h2>
            <!-- <h3 id="date"></h3> -->
        </div>
        <div class="mt-5 pt-5">
            <div class="card jurnal-body w-100" style="background-color: #F2F2F7">
                <div class="card-body p-5">
                    <input name="judul" type="text" id="judul" placeholder="Judul"  value="{{ $jurnal->judul}}"/> <br>
                    <textarea name="konten" id="isi-jurnal" placeholder="Write your feeling here ..." rows="8" cols="50">{{ $jurnal->draft->konten }}</textarea>
                    <br>
                    <button type="submit" class="btn">BACK</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
