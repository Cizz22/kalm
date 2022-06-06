@extends('layouts.auth')

{{-- Hajdah Aleyda --}}
@section('content')
    <div class="container-fluid">
        <div class="row vh-100">
            <div class="col-md-8 text-center py-5 d-flex flex-column justify-content-center text-white"
                style="background-image: url({{ asset('img/login-bg.jpeg') }}); background-size:cover;">
            </div>
            <div class="col-md-4 text-center d-flex flex-column py-5 justify-content-center">
                <div class="auth-form-section">
                    <h2 class="mb-5">Create an Account</h2>
                    <form action="{{ route('register') }}" method="POST" class="auth-form">
                        @csrf
                        <div class="form-group mb-3">
                            <input type="text" name="name" id="name" class="form-control" placeholder="Fullname">
                            @error('name')
                                <div class="mt-2 alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
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
                        <div class="form-group mb-3">
                            <input type="password" name="password_confirmation" id="userPassword" class="form-control"
                                placeholder="Password Confirmation">
                            @error('password_confirmation')
                                <div class="mt-2 alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- <div class="form-group mb-3">
                            <select placeholder="Daftar Sebagai" class="form-control" name="tipeakun">
                                <option value="" selected disabled hidden><button class="btn btn-light dropdown-toggle form-control" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    Sign up As</button></option>
                                <option value="pengguna">Patient</option>
                                <option value="pskolog">Psychologist</option>
                            </select>
                            @error('tipeakun')
                                <div class="mt-2 alert alert-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div> --}}
                        <div class="mb-3">
                            <select placeholder="Daftar Sebagai" class="form-select" name="tipeakun"
                                aria-label="Default select example">
                                <option value="" selected disabled hidden>Sign up As</option>
                                <option value="pengguna">Patient</option>
                                <option value="psikolog">Psychologist</option>
                            </select>
                            @error('tipeakun')
                                <div class="mt-2 alert alert-danger">
                                    {{ $message }}
                                </div>
                            </div>
                        @enderror
                </div>
                <button type="submit" class="login btn w-100 rounded-pill h-15 btn-primary btn-block mb-3">Sign
                    Up</button>
                <div class="d-md-flex justify-content-between mb-3">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="termsAgriment" id="termsAgriment"
                            value="termsAgreed">
                        <label class="form-check-label" for="termsAgriment">
                            Remember Me
                        </label>
                    </div>
                    <br>
                    </form>
                </div>
                <small> Already Have an Account? <a href="/login" class="text-info">Log In?</a> </small>
            </div>
        </div>
    </div>
@endsection
