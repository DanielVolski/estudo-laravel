<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <title>{{ $pageTitle }}</title>
</head>
<body>
    <main>
        <header class="main-header">
            <a class="page-title" href="#"><h1 class="page-title">Laravel</h1></a>
            <div class="button-group">
                <a href="{{ route('login-page') }}" class="button button-hover button-login">{{ __('header.login') }}</a>
                <a href="{{ route('register-page') }}" class="button button-hover button-register">{{ __('header.register') }}</a>
            </div>
        </header>
        @yield("content")
    </main>
</body>
</html>