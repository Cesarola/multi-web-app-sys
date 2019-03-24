<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }} Backend Login</title>
    <link rel="stylesheet" href="{{ asset('css/backend.css') }}">
</head>
<body>
    <div id="backend-login">
        <div id="form-login">
            <div class="text-center my-4"><i class="fas fa-desktop fa-3x"></i></div>
            <h3 class="font-weight-light text-center">{{ config('app.name') }}</h3>
            <h5 class="font-weight-light text-center mb-4">{{ __('Users Access') }}</h5>
            <div class="card custom-bg-dark shadow">
                <div class="card-body p-4">
                    <form action="{{ route('backend.login') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="email">{{ __('Email Address') }}</label>
                            <input type="email" name="email" id="email" class="form-control border-0 shadow-sm{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="password">{{ __('Password') }}</label>
                            <input type="password" name="password" id="password" class="form-control border-0 shadow-sm{{ $errors->has('password') ? ' is-invalid' : '' }}">
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-groupt">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="remember" class="custom-control-input" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="custom-control-label" for="remember">{{ __('Remember me') }}</label>
                            </div>
                        </div>
                        <div class="form-group m-0 mt-4">
                            <button class="btn bg-dark shadow-sm btn-block">{{ __('Login') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
