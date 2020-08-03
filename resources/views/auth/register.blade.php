
@extends('layouts.app')
@section('title')  Register @endsection

@section('sign-up')
    <div class="container">
        <div class="signup-content">

            <form method="POST" action="{{route('register')}}" id="signup-form" class="signup-form">
                @csrf

                <h2 class="form-title">Create account</h2>

                <div class="form-group">
                    <input id="name" type="text" class="form-input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Your Name"/>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <div class="form-group">
                    <input id="email" type="email" class="form-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Your Email"/>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <div class="form-group">

                    <input id="password" type="password" class="form-input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password"/>

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                </div>

                <div class="form-group">
                    <input id="re_password" type="password" class="form-input" name="password_confirmation" required autocomplete="new-password" placeholder="Repeat your password"/>
                </div>

                <!--<div class="form-group">
                    <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                    <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                </div>-->

                <div class="form-group">
                    <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                </div>
            </form>

            <p class="loginhere">
                Have already an account ? <a href="#" class="loginhere-link">Login here</a>
            </p>
        </div>
    </div>
@endsection
