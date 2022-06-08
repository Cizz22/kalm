@extends('layouts.auth')

@section('content')
    <div class="container-fluid">
        <div class="row vh-100">
            <div class="col-md-8 text-center py-5 d-flex flex-column justify-content-center text-white"
                style="background-image: url({{ asset('img/login-bg.jpeg') }}); background-size:cover;">
            </div>
            <div class="col-md-4 text-center d-flex flex-column py-5 justify-content-center">
                <div class="auth-form-section">
                    <h2 class="mb-5">Welcome Back</h2>
                    <form action="{{ route('login') }}" method="POST" class="auth-form">
                        @csrf
                        <div class="form-group mb-3">
                            <input type="text" name="email" id="username" class="form-control" placeholder="Email">
                            @error('email')
                                <div class="mt-2 alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <input type="password" name="password" id="userPassword" class="form-control"
                                placeholder="Password">
                            @error('password')
                                <div class="mt-2 alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button type="submit" class="login btn w-100 rounded-pill h-75 btn-primary btn-block mb-3">Log
                            in</button>
                        <div class="d-md-flex justify-content-between">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="termsAgriment" id="termsAgriment"
                                    value="termsAgreed">
                                <label class="form-check-label" for="termsAgriment">
                                    Remember Me
                                </label>
                            </div>
                            {{-- <a href="{{route('forgot')}}" class="text-info">Forgot Password?</a> --}}
                        </div>
                        <br>
                        <small> Don't Have an Account? <a href="/register" class="text-info">Register?</a> </small>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
