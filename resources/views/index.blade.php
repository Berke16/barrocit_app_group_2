@extends('layouts.master')
@section('content')
<div class="container">
    <form method="POST" action="{{ route('login') }}" class="col-md-4 col-md-offset-4">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="control-label">E-Mail Address</label>

            <input id="email" type="email" class="form-control " name="email" value="{{ old('email') }}" required autofocus>
            <button class="glyphicon glyphicon-question-sign btn btn-circle" data-toggle="tooltip" data-placement="left" title="Fill here your account e-mailaddress" href="#"></button>

            @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class="control-label">Password</label>

            <input id="password" type="password" class="form-control" name="password" required>
            <button class="glyphicon glyphicon-question-sign btn btn-circle" data-toggle="tooltip" data-placement="left" title="Fill here macthing password with your account" href="#"></button>

            @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
            @endif
        </div>

        <div class="form-group">
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                </label>
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">
                Login
            </button>
        </div>
    </form>
</div>

@endsection