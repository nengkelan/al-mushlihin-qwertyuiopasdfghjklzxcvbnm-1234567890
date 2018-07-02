@extends('layouts.general')


@section('atas')
@endsection

@section('isi')
<div class="container">
<div class="row">
<div class="col">
<div class="featured-boxes">
<div class="row">
<div class="col-md-3">
</div>
<div class="col-md-6">
<div class="featured-box featured-box-primary text-left mt-5" style="height: 233.031px;">
<div class="box-content">

<h4 class="heading-primary text-uppercase mb-3">{{ __('Reset Password') }}</h4>

<form method="POST" action="{{ route('password.request') }}" aria-label="{{ __('Reset Password') }}">
@csrf 

<input type="hidden" name="token" value="{{ $token }}">

<div class="form-row">
     <div class="form-group col">
        <label for="email">{{ __('E-Mail Address') }}</label>
        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus>
        @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-row">
     <div class="form-group col">
        <label for="password">{{ __('Password') }}</label>
        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
        @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
    </div>
</div>


<div class="form-row">
     <div class="form-group col">
        <label for="password-confirm">{{ __('Confirm Password') }}</label>
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
    </div>
</div>
         
<div class="form-row">
  <div class="form-group col">
  <button type="submit" value="Login" class="btn btn-primary float-right mb-5" data-loading-text="Loading...">{{ __('Reset Password') }}</button>
  </div>
</div>

</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection

@section('bawah')
@endsection