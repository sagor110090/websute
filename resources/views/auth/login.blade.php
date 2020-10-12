@extends('auth.layouts.app')

@section('content')
<form id="loginform" method="POST" class="form-vertical" action="{{ route('login') }}">
    @csrf
    <div class="control-group normal_text">
        <h3><img src="{{ asset('assets/images') }}/logo-icon.png" alt="Logo" style="height: 100px;" /></h3>
    </div>
    <div class="control-group">
        <div class="controls">
            <div class="main_input_box">
                <span class="add-on bg_lg"><i class="fa fa-user"></i></span> <input id="email" type="email"
                    class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                    required autocomplete="email" autofocus>
                <br>@error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
    </div>
    <div class="control-group">
        <div class="controls">
            <div class="main_input_box">
                <span class="add-on bg_ly"><i class="fa fa-key"></i></span><input id="password" type="password"
                    class="form-control @error('password') is-invalid @enderror" name="password" required
                    autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
    </div>
    <div class="form-actions">
        <span class="pull-left"><a href="#" class="flip-link btn btn-info" id="to-recover">Lost password?</a></span>
        <span class="pull-right"><input type="submit" class="btn btn-success" value="Login" /></span>
    </div>
</form>
<form id="recoverform" method="POST" action="{{ route('password.email') }}" class="form-vertical">
    @csrf
    <p class="normal_text">Enter your e-mail address below and we will send you instructions how to recover a password.
    </p>

    <div class="controls">
        <div class="main_input_box">
            <span class="add-on bg_lo"><i class="fa fa-recycle"></i></span> <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
<br>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-actions">
        <span class="pull-left"><a href="#" class="flip-link btn btn-success" id="to-login">&laquo; Back to
                login</a></span>
        <span class="pull-right"><button type="submit" class="btn btn-primary">
                {{ __('Send Password Reset Link') }}
            </button></span>
    </div>
</form>
@endsection