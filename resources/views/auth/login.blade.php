@extends('layouts.app')

@section('content')
<div class="login-page">

    <div class="body">

        <div class="login-form">
            <h1>Sign in!</h1>
            <h2>Hello there!, Welcome back</h2>
            <form method="POST" action="{{ route('login') }}" class="form">

                <div class="input-container">
                    <label class="input-label" for="">Username/Email</label>
                    <div class="icon-input-group">

                        <i class="fas fa-at"></i>
                        <input class="input-field" type="text" placeholder="Username" name="email">
                    </div>
                </div>
                <div class="input-container">
                    <label class="input-label" for="">Password</label>
                    <div class="icon-input-group">

                        <i class="fas fa-lock"></i>
                        <input class="input-field" type="password" placeholder="Password" name="password">
                    </div>
                </div>

                <div class="btn-container">
                    <button class="login-btn" type="submit">Login</button>
                    <a href="{{ route('password.request') }}" class="btn">Forgot Password?</a>
                    <div>

                    </div>
                </div>
            </form>
        </div>

        {{-- <div class="register-form">
                <h1>Register!</h1>
                <form action="" class="form">
                <div class="input-container">
                    <label class="input-label"  for="">Username/Email</label>
                    <input  class="input-field" type="text">
                </div>
                <div class="input-container">
                    <label class="input-label"  for="">Password</label>
                    <input  class="input-field" type="password">
                </div>

                <div class="input-container">
                    <input id="rememberMe" type="checkbox">
                    <label class="input-label"  for="rememberMe">checkbox</label>

                </div>

                <div class="input-container">
                    <button type="submit">Register</button>
                </div>
            </form>
        </div>

        <div class="reset-password-form">
                <h1>Reset Password!</h1>
                <form action="" class="form">
                <div class="input-container">
                    <label for="">Username/Email</label>
                    <input type="text">
                </div>

                <div class="input-container">
                    <button type="submit">Reset Password</button>
                </div>
            </form>
        </div> --}}


    </div>
</div>
@endsection
