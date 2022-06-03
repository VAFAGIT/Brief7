


    <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/upgrade.css') }}" rel="stylesheet">
</head>
<body>
<div class="main_content">
    <h2>{{ __('Reset Password') }}</h2>
    @if (session('status'))
        {{ session('status') }}
    @endif
    <form method="POST" action="{{ route('password.email') }}" class="form-box">
        @csrf

        <div class="group-form">
            <label for="email" class="label-form">
                Address email :
            </label>
            <input type="email" class="input-form" id="email" placeholder="Address email" name="email"
                   value="{{ old('email') }}" required autocomplete="email" autofocus>
        </div>

        @error('email')
        <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <button type="submit" class="btn btn-primary">
            {{ __('Send Password Reset Link') }}
        </button>
    </form>
</div>
</body>
</html>
