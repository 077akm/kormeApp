@extends('layouts.app')

@section('content')
<div class="container">

        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="{{asset('assets/images/bannerr.png')}}"
                                     alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">

                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <img src="https://i.pinimg.com/736x/0d/cf/b5/0dcfb548989afdf22afff75e2a46a508.jpg" style="width: 56px; height: 56px; border-radius: 50%; margin-right: 7px">
                                            <span class="h1 fw-bold mb-0"> Korme | Portfolio</span>
                                        </div>

                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">{{__('bet.login')}}</h5>

                                        <div class="form-outline mb-4">
                                            <input type="email" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus class="form-control form-control-lg @error('email') is-invalid @enderror" />
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <label class="form-label" for="email">{{ __('bet.email') }}</label>
                                        </div>

                                        <div class="form-outline mb-2">
                                            <input type="password" id="password" name="password" required autocomplete="current-password" class="form-control form-control-lg @error('password') is-invalid @enderror" />
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <label class="form-label" for="password">{{ __('bet.password') }}</label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('bet.rememberme') }}
                                            </label>
                                        </div>

                                        <div class="pt-1 mb-4">
                                            <button class="btn btn-dark btn-lg btn-block" type="submit">{{ __('bet.login') }}</button>
                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif
                                            <a href="{{ route('register.form') }}" style="margin-left: 5px" class="btn btn-outline-dark btn-lg btn-block">{{ __('bet.register') }}</a>
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
