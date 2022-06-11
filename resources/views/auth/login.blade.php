@extends('layouts.app')
@section('content')
    <style>
        body{
            background: radial-gradient(circle, rgba(63,94,251,1) 0%, rgba(252,70,150,1) 67%);
        }
        .card{
            color:#0029ff;
            font-size:20px;
            font-weight:700;
            border:none;
            margin-top: 220px;
            max-width: 1000px;
            height: 500px;
            border: 1px solid #9C9C9C;
        }

    </style>
<div class="container mt-5">
    <div class="row justify-content-center mt-5">
        <div class="col-md-10 mt-5">
            <div class="card mt-5">
                <div class="card-header alert alert-primary text-primary">{{ __('Global Money') }}</div>
                <div class="card-body" style="margin-top: 60px ">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

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
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label text-muted"  for="remember">
                                        <h6>{{ __('Remember Me') }}</h6>
                                    </label>

                                </div>
                            </div>
                        </div>
                        <div class="row mb-3 mt-2">
                            <div class="col-md-6 offset-md-4">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-lg form-control">
                                            {{ __('Login') }}
                                        </button>
                                    </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
