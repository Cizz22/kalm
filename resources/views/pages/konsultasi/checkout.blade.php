@extends('layouts.layout')
<!-- by fidela nathania -->
@section('stylesheet')
<link rel="stylesheet" href="{{ asset('css/layouts/konsultasi.css') }}"> @endsection


@section('content')
<div class="flex-container">
    <!-- Background image -->
    <img src="{{ asset('img/payment-bg.png') }}" alt="" style="width:100%;">
    <h2 class="top-center">
        <strong>Payment Details</strong><br>
    </h2>

    <div class="mid-center mt-5 pt-5">
        <form class="table-responsive pt-2">
            <table class="table table-borderless">
                <tr>
                    <td>
                        <label for="psikolog"> <strong style="color: grey;">Consultation</strong> <br>Psychologist</label>
                    </td>
                    <td>
                        <div class="container" style="text-align: right;"><br>{{$konsultasi -> psikolog -> name}}</div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="paket"> <strong style="color: grey;">Package</strong></label>
                    </td>
                    <td>
                        <div class="container" style="text-align: right;">{{$konsultasi -> paket -> nama}}</div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="jadwal"><strong style="color: grey;">Date & Time</strong></label>
                    </td>
                    <td>
                        <div class="container" style="text-align: right;">{{$konsultasi -> jadwal}}</div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="subtotal">Subtotal</label>
                    </td>
                    <td>
                        <div class="container" style="text-align: right;">{{$konsultasi -> paket -> harga}}</div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="voucher">Voucher</label>
                    </td>
                    <td>
                        <div class="container" style="text-align: right;">-</div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="checkout"><strong>Total</strong></label>
                    </td>
                    <td>
                        <div class="container" style="text-align: right;"> <strong>{{$konsultasi -> paket -> harga}}</strong>
                        </div>
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <!-- Checkout button -->
    <div class="bottom-center">
        <button type="submit" class="btn mb-3" onclick="Success()">
            CHECKOUT
        </button>
    </div>
</div>
<script src="{{ asset('js/app.js') }}"></script>

@endsection

@section('script')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script>
    function Success() {

        Swal.fire({
                icon: 'success',
                title: 'Your Payment Succeed',
                showConfirmButton: false,
                timer: 1500
            })
            .then(() => {
                window.location.replace = "http://127.0.0.1/home"
            })
    }
</script>

@endsection
