@extends('layouts.header', ['pageTitle' => __('pages.login')])
@section('content')
<div class="form-register-container">
    <form class="form-register" method="post">
        <div class="form-login-input-col">
            <div class="form-login-input-row form-title">
                <h2>Login</h2>
            </div>
            <div class="form-login-input-col">
                <label class="form-register-label" for="email">Email</label>
                <input class="form-register-input" type="email" name="email" placeholder="Type your email">
            </div>
            <div class="form-login-input-col">
                <label class="form-register-label" for="passwrod">Username</label>
                <input class="form-register-input" type="password" name="password" placeholder="Enter your password">
            </div>
            <div class="form-login-input-col">
                <button class="button form-register-submit">Enter</button>
            </div>
        </div>
    </form>
</div>
@endsection