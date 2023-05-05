@extends('layouts.app')

@section('content')
<section class="reset-password">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card-auth">
                    <div class="card-content">
                        <h2 class="center">{{ __('Reset Password') }}</h2>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <p class="nb-rest">* The same email as the registered account</p>
                                        <input id="email" type="email"  class="form-content @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6 display-flex">
                                        <button type="submit" class="btn-login btn">
                                            {{ __('Send Password Reset Link') }}
                                        </button>
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
