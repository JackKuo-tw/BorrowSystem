@extends('layouts.auth')

@section('content')
    <h4 class="card-title">{{ __('Register') }}</h4>
    <form method="POST" class="my-login-validation" novalidate="" action="{{ route('register') }}">
        @csrf
        <div class="form-group">
            <label for="name">{{ __('Name') }}</label>
            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
            <div class="invalid-feedback">
                What's your name?
            </div>
            @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
	                                        <strong>{{ $errors->first('name') }}</strong>
	                                    </span>
            @endif
        </div>

        <div class="form-group">
            <label for="email">{{ __('E-Mail Address') }}</label>
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
            <div class="invalid-feedback">
                Your email is invalid
            </div>

            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
		                                        <strong>{{ $errors->first('email') }}</strong>
		                                    </span>
            @endif

        </div>

        <div class="form-group">
            <label for="password">{{ __('Password') }}</label>
            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required data-eye>
            <div class="invalid-feedback">
                Password is required
            </div>

            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
		                                        <strong>{{ $errors->first('password') }}</strong>
		                                    </span>
            @endif

        </div>

        <div class="form-group">
            <label for="password">{{ __('Confirm Password') }}</label>
            <input id="password" type="password" class="form-control" name="password_confirmation" required data-eye>
            <div class="invalid-feedback">
                Password is required
            </div>
        </div>

        <div class="form-group m-0">
            <button type="submit" class="btn btn-primary btn-block">
                {{ __('Register') }}
            </button>
        </div>
        <div class="mt-4 text-center">
            Already have an account? <a href="{{ route('login') }}">{{ __('Login') }}</a>
        </div>
    </form>
    </div>
@endsection
