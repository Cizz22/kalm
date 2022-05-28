@extends('layouts.layout')
<!-- by fidela nathania -->
@section('stylesheet')
<link rel="stylesheet" href="{{ asset('css/layouts/konsultasi.css') }}"> @endsection


@section('content')
<div class="flex-container">
    <!-- Background image -->
    <img src="{{ asset('img/payment-bg.png') }}" alt="" style="width:100%;">
    <h2 class="top-center">
        <strong>Payment Details</strong>
    </h2>
<!-- baru UI aja belom ngambil data dari database -->
    <div class="mid-center pt-5">
        <form class="table-responsive pt-2">
            <table class="table table-borderless">
                <tr>
                    <td>
                        <label for="psikolog"> <strong style="color: grey;">Consultation</strong> <br>Psychologist</label>
                    </td>
                    <td>
                        <div class="container" style="text-align: right;"><br>Nur Ani S.pd</div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="paket"> <strong style="color: grey;">Package</strong> <br>Kalm <br>Total session </label>
                    </td>
                    <td>
                        <div class="container"  style="text-align: right;"><br><br>4</div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="jadwal"><strong style="color: grey;">Date & Time</strong></label>
                    </td>
                    <td>
                        <div class="container"  style="text-align: right;">27 September 2022, 09.00</div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="subtotal">Subtotal</label>
                    </td>
                    <td>
                        <div class="container"  style="text-align: right;">Rp280.000,00</div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="voucher">Voucher</label>
                    </td>
                    <td>
                        <div class="container"  style="text-align: right;">-</div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="checkout"><strong>Total</strong></label>
                    </td>
                    <td>
                        <div class="container"  style="text-align: right;">Rp280.000,00
                        </div>
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <!-- Checkout button -->
    <div class="bottom-center">
        <button type="submit" class="btn mb-3">
            CHECKOUT
        </button>
    </div>
</div>
<script src="{{ asset('js/app.js') }}"></script>

@endsection
