@extends('layouts.app')
@section('title')  Login @endsection

@section('sign-up')
    <div class="container">
        <div class="signup-content">

            <form method="POST" action="{{route('login')}}" id="signup-form" class="signup-form">
                @csrf

                <h2 class="form-title"> Login Account</h2>

                <div class="form-group">
                    <input id="email" type="email" class="form-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Your Email"/>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <div class="form-group">

                    <input id="password" type="password" class="form-input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password"/>

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror

                    <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                </div>


                <div class="form-group">
                    <input class="form-check-input"  type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}/>
                    <label for="remember" class="label-agree-term"><span><span></span></span> Remember Me</label>
                </div>

                <div class="form-group">
                    <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>

                </div>
            </form>

            <p class="loginhere">
                Forgot Password ?

                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}"class="loginhere-link">Click Here</a>
                @endif

            </p>
        </div>
    </div>
@endsection
