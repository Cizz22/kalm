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
    <form action="{{ route('jurnal.save') }}" method="post">
        @csrf

        <input type="hidden" value="{{$jurnal->id}}" name="id">
        <div class="py-3 px-3">
            <h1>{{$jurnal -> created_at -> format('l, j M Y')}}</h1>
        </div>


        <div class="mt-5 pt-5">
            <div class="card jurnal-body w-100" style="background-color: #F2F2F7">
                <div class="card-body p-5">
                    <input name="judul" type="text" id="judul" placeholder="Judul" value="{{ $jurnal->judul}}" /> <br>
                    <textarea name="konten" id="isi-jurnal" placeholder="Write your feeling here ..." class="pt-3">{{ $jurnal->draft->konten }}</textarea>
                    <br>
                    <button type="submit" class="btn">BACK</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
