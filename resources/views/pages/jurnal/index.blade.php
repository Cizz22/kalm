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
<div class="container-fluid ">
    <div class="row">
        <div class="col-6 px-4 py-3 vh-100 m-0 left">
            <div>
                <h1>Your Journal</h1>
            </div>
            <div>
                <h4>Notebooks</h4>
                <div class="d-flex justify-content-start gap-5">
                    <div>
                        <img class="jurnal-book" src="{{ asset('img/book1.png') }}" alt="" srcset="">
                    </div>
                    <div>
                        <img class="jurnal-book" src="{{ asset('img/book2.png') }}" alt="" srcset="">
                    </div>
                    <div>
                        <img class="jurnal-book" src="{{ asset('img/book3.png') }}" alt="" srcset="">
                    </div>
                </div>

                <div class="mt-5">
                    <h4>Latest Entries</h4>

                    <div class="item d-flex justify-content-between my-4" style="width: 50%">
                        <div>
                            <h4>What a day!</h4>
                            <div class="d-flex justify-content-between">
                                <span>Jam</span>
                                <span>Tanggal</span>
                            </div>
                        </div>
                        <div>
                            <i class='bx bx-chevron-right'></i>
                        </div>
                    </div>
                    <div class="item d-flex justify-content-between my-4" style="width: 50%">
                        <div>
                            <h4>What a day!</h4>
                            <div class="d-flex justify-content-between">
                                <span>Jam</span>
                                <span>Tanggal</span>
                            </div>
                        </div>
                        <div>
                            <i class='bx bx-chevron-right'></i>
                        </div>
                    </div>
                </div>



            </div>
        </div>


        <div class="col-6 right m-0 p-0">
            <div class="py-5 px-3 ml-3">
                <h3>Sunday</h3>
                <input type="text" id="date" placeholder="Tanggal" class="textbox-n" onfocus="(this.type='date')">

            </div>
            <div class="mt-5 pt-5">
                <div class="card jurnal-body w-100" style="background-color: #F2F2F7">
                    <div class="card-body p-5">
                        <input type="text" id="judul" placeholder="Judul" /> <br>
                        <textarea id="isi-jurnal" placeholder="Write your feeling here ..."
                        rows="8" cols="50"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
