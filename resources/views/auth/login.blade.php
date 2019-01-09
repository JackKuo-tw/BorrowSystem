@extends('layouts.auth')

@section('content')
                        <h4 class="card-title">{{ __('Login') }}</h4>
                        <form method="POST" class="my-login-validation" novalidate="" action="{{ route('login') }}">
                            @csrf
                            <input type="hidden" name="csrfmiddlewaretoken" value="AHyHjixmsA37E5NDrMVK1Fzok4SVnUjj40pwcSnMvF2GMNk54eo6oJCy2jTvUKlq">
                            <div class="form-group">
                                <label for="email">{{ __('E-Mail Address') }}</label>
                                <input id="username" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                            </div>

                            <div class="form-group">
                                <label for="password">{{ __('Password') }}
                                    <a href="{{ route('password.request') }}" class="float-right">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                </label>

                                <input id="password" type="password" class="form-control" name="password" required data-eye>
                                <div class="invalid-feedback">
                                    Password is required
                                </div>

                            </div>

                            <div class="form-group">
                                <div class="custom-checkbox custom-control">
                                    <input type="checkbox" name="remember" id="remember" class="custom-control-input" {{ old('remember') ? 'checked' : '' }}>
                                    <label for="remember" class="custom-control-label">{{ __('Remember Me') }}</label>
                                </div>

                            </div>

                            <div class="form-group m-3">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </form>
                        <div class="mt-4 text-center">
                            沒有帳號？<a href="{{ route('register') }}">註冊一個</a>
                        </div>
                    </div>

@endsection
