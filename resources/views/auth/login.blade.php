@extends('auth.layout')
@section('title', 'Login')
@section('content')

<div class="limiter">
    <div class="container-login100">


        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="{{ asset('assets/images/cmv_logo.png') }}" alt="IMG">
            </div>

            <form method="POST" action="{{ route('login.post') }}" class="login100-form validate-form">
                @csrf
                <span class="login100-form-title">
                    Login
                </span>

                <div class="wrap-input100 validate-input">
                    <input class="input100" type="text" name="username" placeholder="Username">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" type="password" name="password" placeholder="Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                </div>

                <!-- <div class="row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div> -->

                <div class="container-login100-form-btn">
                    <button type="submit" class="login100-form-btn">
                        <a href="{{ route('home') }}"></a>
                        {{ __('Login') }}
                    </button>
                </div>

                <div class="text-center p-t-12">
                    <span class="txt1">
                        Forgot
                    </span>
                    <a class="txt2" href="#">
                        Username / Password?
                    </a>
                </div>

                <!-- <div class="text-center p-t-136" style="padding-top: 5rem">
                    <a class="txt2" href="#">
                        Create your Account
                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                    </a>
                </div> -->
            </form>
        </div>
    </div>
</div>

@endsection