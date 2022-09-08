@extends('front.master.app')

@section('main-body')
<div class="main-body">

    <!-- Start Sign Up Area -->
    <section class="user-area-all-style sign-up-area ptb-100">
        <div class="container">
            <div class="contact-form-action">
                <form method="POST" action="{{ route('register') }}">
                    <div class="row">

                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <input class="form-control" type="text" name="name"
                                  placeholder="{{ __('Enter your Username') }}">
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <input class="form-control" type="email" name="email"
                                  placeholder="{{ __('Email Address') }}">
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <input class="form-control" type="text" name="password"
                                  placeholder="{{ __('Password') }}">
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12 ">
                            <div class="form-group">
                                <input class="form-control" type="text" name="password"
                                  placeholder="{{ __('Confirm Password') }}">
                            </div>
                        </div>
                        {{--
                        <div class="col-md-12 col-sm-12 col-xs-12 form-condition">
                            <div class="agree-label">
                                <input type="checkbox" id="chb1">
                                <label for="chb1">
                                    I agree with Surety
                                    <a href="privacy-policy.html">Privacy Policy</a>
                                </label>
                            </div>

                            <div class="agree-label">
                                <input type="checkbox" id="chb2">
                                <label for="chb2">
                                    I agree with Surety
                                    <a href="terms-conditions.html">Terms & Conditions</a>
                                </label>
                            </div>
                        </div> --}}

                        <div class="col-12">
                            <button class="default-btn btn-two" type="submit">
                                Register Account
                            </button>
                        </div>

                        <div class="col-12">
                            <p class="account-desc">
                                Already have an account?
                                <a href="{{ route('login') }}"> Log In</a>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- End Sign Up Area -->
</div>
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

<div class="card-body">
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="row mb-3">
            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                  value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                  value="{{ old('email') }}" required autocomplete="email">

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
                  name="password" required autocomplete="new-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="password-confirm"
              class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                  autocomplete="new-password">
            </div>
        </div>

        <div class="row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
            </div>
        </div>
    </form>
</div>
</div>
</div>
</div>
</div> --}}
@endsection
