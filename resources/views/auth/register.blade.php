@extends('layouts.app')

@section('content')
<div class="container">




    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0">
                        <div class="col-md-6 col-lg-5 d-none d-md-block">
                            <img src="https://e0.pxfuel.com/wallpapers/356/576/desktop-wallpaper-music-brown-guitar-musical-instrument-acoustic-guitar.jpg"
                                 alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                        </div>
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">

                                <form method="post" action="{{ route('register') }}" enctype="multipart/form-data">
                                    @csrf

                                    <div class="d-flex align-items-center mb-3 pb-1">
                                        <img src="https://www.bax-shop.co.uk/img/logo/logo.svg" style="width: 56px; height: 56px">
                                        <span class="h1 fw-bold mb-0">Tools Center</span>
                                    </div>

                                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">{{__('bet.register')}}</h5>

                                    <div class="form-outline mb-2">
                                        <input type="text" id="name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus class="form-control form-control-lg @error('name    ') is-invalid @enderror" />
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                        <label class="form-label mt-2" for="email">{{ __('bet.name') }}</label>
                                    </div>

                                    <div class="form-outline mb-2">
                                        <input type="email" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus class="form-control form-control-lg @error('email') is-invalid @enderror" />
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $message }}</strong>
                                                </span>
                                        @enderror
                                        <label class="form-label mt-2" for="email">{{ __('bet.email') }}</label>
                                    </div>

                                    <div class="form-outline mb-2">
                                        <input type="password" id="password" name="password" required autocomplete="current-password" class="form-control form-control-lg @error('password') is-invalid @enderror" />
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        @enderror
                                        <label class="form-label mt-2" for="password">{{ __('bet.password') }}</label>
                                    </div>

                                    <div class="form-outline mb-2">
                                        <input type="password" id="password-confirm" class="form-control" name="password_confirmation" required autocomplete="new-password" />

                                        <label class="form-label" for="password-confirm">{{ __('bet.confirmpass') }}</label>
                                    </div>

                                    <div class="form-outline mb-3">

                                        <input type="file" id="avatarInput" name="avatar" class="form-control-file form-control" />
                                        @error('avatar')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                        <label class="form-label mt-2" for="avatarInput">{{ __('bet.image') }}</label>
                                    </div>



                                    <div class="pt-1 mb-4">
                                        <button class="btn btn-dark btn-lg btn-block" type="submit">{{ __('bet.register') }}</button>

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
