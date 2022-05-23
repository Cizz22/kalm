
@extends('layouts.auth')

@section('content')
<div class="container-fluid">
    <div class="row vh-100">
        <div class="col-md-8 text-center py-5 d-flex flex-column justify-content-center text-white" style="background-image: url({{asset('img/login-bg.jpeg')}}); background-size:cover;">
        </div>
        <div class="col-md-4 text-center d-flex flex-column py-5 justify-content-center">
            <div class="auth-form-section">
                <h2 class="mb-5">Create an Account</h2>
                <form action="{{route('register')}}" method="POST" class="auth-form">
                    @csrf
                    <div class="form-group mb-3">
                        <input type="text" name="name" id="name" class="form-control" placeholder="Fullname">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="email" id="username" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group mb-3">
                    <input type="password" name="password" id="userPassword" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" name="password_confirmation" id="userPassword" class="form-control" placeholder="Password Confirmation">
                        </div>
                    <div class="form-group mb-3">
                        <select placeholder="Daftar Sebagai" class="form-control" name="tipeakun">
                            <option value="" selected disabled hidden>Sign up As</option>
                            <option value="pengguna">Patient</option>
                            <option value="pskolog">Psychologist</option>
                        </select>
                    </div>
                    <button type="submit" class="login btn w-100 rounded-pill h-75 btn-primary btn-block mb-3">Sign Up</button>
                    <div class="d-md-flex justify-content-between">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="termsAgriment" id="termsAgriment" value="termsAgreed">
                            <label class="form-check-label" for="termsAgriment">
                                Remember Me
                            </label>
                        </div>
                    </div>
                    <br>
                    <small> Already Have an Account? <a href="#" class="text-info">Log In?</a> </small>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

