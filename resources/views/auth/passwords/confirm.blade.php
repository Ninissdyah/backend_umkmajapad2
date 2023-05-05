@extends('layouts.app')

@section('content')
<section class="reset-password">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card-auth">
                    <div class="card-content">
                        <h2 class="center">{{ __('Confirm Password') }}</h2>

                        <div class="card-body">
                            {{ __('Please confirm your password before continuing.') }}

                            <form method="POST" action="{{ route('password.confirm') }}">
                                @csrf

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-content @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6 display-flex">
                                        <button type="submit" class="btn-login btn">
                                            {{ __('Confirm Password') }}
                                        </button>

                                        @if (Route::has('password.request'))
                                            <a class="btn-login btn" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
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
