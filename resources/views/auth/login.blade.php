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
<div class="featured-box featured-box-primary text-left mt-5" style="height: 383.031px;">
<div class="box-content">

<h4 class="heading-primary text-uppercase mb-3">{{ __('Silahkan Login') }}</h4>

<form method="POST" id="frmSignIn" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
@csrf 

<div class="form-row">

     <div class="form-group col">
        <label for="email">{{ __('E-Mail Address') }}</label>
        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
          @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                 <strong>{{ $errors->first('email') }}</strong>
                </span>
           @endif
        </div>
</div>
                                                    
<div class="form-row">
 <div class="form-group col">
    <a class="btn btn-link float-right" href="{{ route('password.request') }}">
    {{ __('Lupa Passwrd?') }}</a>
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
  <div class="form-group col-lg-6">
  <div class="form-check form-check-inline">
     <label class="form-check-label">
     <input class="form-check-input" type="checkbox" id="rememberme"  name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Ingatkan Saya') }}
    </label>
  </div>
  </div>

  <div class="form-group col-lg-6">
  <button type="submit" value="Login" class="btn btn-primary float-right mb-5" data-loading-text="Loading...">{{ __('Login') }}</button>
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