@extends('layouts.app')

@section('content')
<section class="register">
    <div class="container">
        <div class="title-dashboard">
        @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <h3 class="alertx">{{ $message }}</h3>
                </div>
            @endif
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card-auth">
                    <div class="card-content">
                        <h2 class="center">{{ __('Register') }}</h2>
                            <div class="card-body">
                                <form method="POST" action="{{ url('store/register') }}">
                                    @csrf

                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-content @error('name') is-invalid @enderror" name="name" placeholder="Store Name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-content @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-content @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-content @error('password') is-invalid @enderror" name="confirmPassword" placeholder="Confirm Password" required autocomplete="new-password">

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
                                                {{ __('Register') }}
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
    </div>
</section>
@endsection
