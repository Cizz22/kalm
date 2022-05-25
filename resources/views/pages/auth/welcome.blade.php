
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
                    <a href="{{route('register')}}"  class="login btn w-100 rounded-pill  btn-primary btn-block mb-3">Sign Up</a>
                    <a href="{{route('login')}}" class="login btn w-100 rounded-pill btn-primary btn-block mb-3">Sign In</a>
            </div>
        </div>
    </div>
</div>
@endsection

