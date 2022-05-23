
@extends('layouts.auth')

@section('content')
<div class="container-fluid">
    <div class="row vh-100">
        <div class="col-md-8 text-center py-3 d-flex flex-column justify-content-center text-white" style="background-image: url({{asset('img/login-bg.jpeg')}}); background-size:cover;">
        </div>
        <div class="col-md-4 text-center d-flex flex-column py-1 justify-content-center">
            <div class="auth-form-section">
                <h2 class="mb-3">Welcome to Kalm</h2>
                <p> Get your Inner Peace </p>
                <form action="#" method="POST" class="auth-form">
                    @csrf
                    <button type="submit" class="login btn w-100 rounded-pill h-75 btn-primary btn-block mb-3">Sign Up As Patient</button>
                    <button type="submit" class="login btn w-100 rounded-pill h-75 btn-primary btn-block mb-3">Sign Up As Psychologist</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

