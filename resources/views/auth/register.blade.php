@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    {{-- Social Login --}}
                    <div class="mb-3 text-center">
                        @if(get_web_config_env_data('GOOGLE_AUTH') === 'true')
                            <a href="{{ set_social_auth('google') }}" class="btn btn-outline-secondary w-100 mb-2 d-flex align-items-center justify-content-center">
                                <img src="https://www.svgrepo.com/show/355037/google.svg" alt="Google" class="me-2" width="20">
                                Continue with Google
                            </a>
                        @endif

                        @if(get_web_config_env_data('GITHUB_AUTH') === 'true')
                            <a href="{{ set_social_auth('github') }}" class="btn btn-outline-dark w-100 mb-2 d-flex align-items-center justify-content-center">
                                <i class="bi bi-github me-2"></i>
                                Continue with GitHub
                            </a>
                        @endif

                        @if(get_web_config_env_data('FACEBOOK_AUTH') === 'true')
                            <a href="{{ set_social_auth('facebook') }}" class="btn btn-outline-primary w-100 mb-2 d-flex align-items-center justify-content-center">
                                <i class="bi bi-facebook me-2"></i>
                                Continue with Facebook
                            </a>
                        @endif
                    </div>

                    {{-- Divider --}}
                    <div class="d-flex align-items-center my-3">
                        <hr class="flex-grow-1">
                        <span class="px-2 text-muted">or</span>
                        <hr class="flex-grow-1">
                    </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

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
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
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
</div>
@endsection
