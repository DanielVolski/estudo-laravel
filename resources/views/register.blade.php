@extends('layouts.header', ['pageTitle' => __('registerPage.pageTitle')])
@section('content')
<div class="form-register-container">
    <form class="form-register" method="post">
        <div class="form-login-input-row form-title">
            <h2>{{ __('registerPage.formTitle') }}</h2>
        </div>
        <div class="form-login-input-row">
            <div class="form-login-input-col">
                <label class="form-register-label" for="fullname">{{ __('registerPage.fullName') }}</label>
                <input class="form-register-input" type="text" name="fullname" placeholder="{{ __('registerPage.phFullName') }}">
            </div>
            <div class="form-login-input-col">
                <label class="form-register-label" for="username">{{ __('registerPage.userName') }}</label>
                <input class="form-register-input" type="text" name="username" placeholder="{{ __('registerPage.phUserName') }}">
            </div>
        </div>
        <div class="form-login-input-row">
            <div class="form-login-input-col">
                <label class="form-register-label" for="email">{{ __('registerPage.email') }}</label>
                <input class="form-register-input" type="email" name="email" placeholder="{{ __('registerPage.phEmail') }}">
            </div>
            <div class="form-login-input-col">
                <label class="form-register-label" for="email">{{ __('registerPage.birthDate') }}</label>
                <input class="form-register-input" type="email" name="email" placeholder="{{ __('registerPage.phBirthDate') }}">
            </div>
        </div>
        <div class="form-login-input-row">
            <div class="form-login-input-col">
                <label class="form-register-label" for="password">{{ __('registerPage.password') }}</label>
                <input class="form-register-input" type="password" name="password" placeholder="{{ __('registerPage.phPassword') }}">
            </div>
            <div class="form-login-input-col">
                <label class="form-register-label" for="confirm-passord">{{ __('registerPage.confirmPassword') }}</label>
                <input class="form-register-input" type="email" name="confirm-passord" placeholder="{{ __('registerPage.phConfirmPassword') }}">
            </div>
        </div>
        <div class="form-login-input-col">
            <button class="button form-register-submit">{{ __('registerPage.registerButton') }}</button>
        </div>
    </form>
</div>
@endsection