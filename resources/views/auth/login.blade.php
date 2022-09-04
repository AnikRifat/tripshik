@extends('front.master.app')

@section('main-bodygi')


<!-- Start Page Title Area -->
<div class="page-title-area bg-7">
    <div class="container">
        <div class="page-title-content">
            <h2>{{ __('Log In') }}</h2>

        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Log In Area -->
<section class="user-area-all-style log-in-area ptb-100">
    <div class="container">
        <div class="contact-form-action">
            <form action="{{ route('login') }}" method="post">
                <div class="row">

                    <div class="col-12">
                        <div class="form-group">
                            <input class="form-control" type="text" name="email"
                              placeholder="{{ __('Username or Email') }}">
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <input class="form-control" type="password" name="password" placeholder="{{ __(" Password")
                              }}">
                        </div>
                    </div>

                    {{-- <div class="col-lg-6 col-sm-6 form-condition">
                        <div class="agree-label">
                            <input type="checkbox" id="chb1">
                            <label for="chb1">
                                Remember Me
                            </label>
                        </div>
                    </div> --}}

                    <div class="col-lg-6 col-sm-6">
                        <a class="forget" href="recover-password.html">{{ __('Forgot my password?') }}</a>
                    </div>

                    <div class="col-12">
                        <button class="default-btn btn-two" type="submit">
                            {{ __('Log In Now') }}
                        </button>
                    </div>

                    <div class="col-12">
                        <p class="account-desc">
                            Not a member?
                            <a href="sign-in.html">{{ __('Register') }}</a>
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- End Log In Area -->







{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

<div class="card-body">
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="row mb-3">
            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                  value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                  name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6 offset-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember')
                      ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>
        </div>

        <div class="row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                </button>

                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
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
</div> --}}
@endsection
