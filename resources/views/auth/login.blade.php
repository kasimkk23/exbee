@extends('layouts.layout')

@section('content')
<div class="main_signup">
    <div class="container" id="container">
        <div class="form-container sign-in-container">
            <form method="POST" action="{{ route('login') }}">
            @csrf
                <h1>Sign in</h1>
                <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus/>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password" />
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <button type="submit" >{{ __('Login') }}</button>
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <h1>Hello, people!</h1>
                    <p>Enter your personal details and start journey with us.</p>
                    <button class="ghost" id="signUp">
                        <a href="{{route('register')}}">Sign Up</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
