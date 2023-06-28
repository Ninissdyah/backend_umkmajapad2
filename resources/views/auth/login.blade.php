@extends('layouts.app')

@section('content')
<section class="login">
<div class="title-dashboard">
            @if ($message = Session::get('regist'))
                <div class="alert alert-success alert-block">
                    <h3 class="alertx">{{ $message }}</h3>
                </div>
            @endif
            @if ($message = Session::get('false'))
                <div class="alert alert-danger alert-block">
                    <h3 class="alertx">{{ $message }}</h3>
                </div>
            @endif
            @if ($message = Session::get('berhasil'))
                <div class="alert alert-danger alert-block">
                    <h3 class="alertx">{{ $message }}</h3>
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger alert-block">
                    {{ session('error') }}
                </div>
            @endif
        </div>
    <div class="container">
        
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card-auth">
                    <div class="card-content">
                        <h2 class="center">{{ __('Login') }}</h2>

                        <div class="card-body">
                            <form method="POST" action="{{ url('admin/login') }}">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <input id="email" type="email"  class="form-content @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-content @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <button type="submit" class="btn-login btn">
                                            {{ __('Login') }}
                                        </button>

                                        @if (Route::has('password.request'))
                                            <a class="btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="login-regist">
                                            <p class="text-regist">Don't have an account yet? </p>
                                            <a href="{{ route('register') }}" class="regist">Register</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
