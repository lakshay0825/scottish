@extends('layouts.app')

@section('content')
<div class="content">
  <div class="container">
    <div class="row justify-content-center">
      <!-- <div class="col-md-6 order-md-2">
          <img src="images/undraw_file_sync_ot38.svg" alt="Image" class="img-fluid">
        </div> -->
      <div class="col-md-6 contents">
        <div class="row justify-content-center">
          <div class="col-md-12">
            <div class="form-block text-center">
              <div class="mb-4">
                <img src="{{ Vite::asset('resources/images/logo.png') }}" alt="logo" class="logo" width="200px">
                <h3>Sign In to <strong>Scottish</strong></h3>
                <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p>
              </div>
              <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group first mb-4">
                  <label for="username">Email</label>
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror

                </div>
                <div class="form-group last mb-4">
                  <label for="password">Password</label>
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror

                </div>

                <div class="d-flex mb-5 align-items-center">
                  <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <div class="control__indicator"></div>
                  </label>
                  <span class="ml-auto">
                    @if (Route::has('password.request'))
                        <a class="forgot-pass" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif</span>
                </div>
                <button type="submit" class="btn btn-pill text-white btn-block btn-primary">
                    {{ __('Log In') }}
                </button>
              </form>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>
</div>
@endsection
