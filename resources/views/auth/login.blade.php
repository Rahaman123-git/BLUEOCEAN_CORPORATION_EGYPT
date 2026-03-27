@extends('layouts.auth')

@section('content')
  <div class="container">
    <div class="mt-4">
      <div class="card rounded-0 overflow-hidden shadow-none border mb-5 mb-lg-0">
        <div class="row g-0">
          <div class="col-12 order-1 col-xl-8 d-flex align-items-center justify-content-center border-end">
            <img src="{{ asset('assets/backend/images/error/auth-img-7.png') }}" class="img-fluid" alt="">
          </div>
          <div class="col-12 col-xl-4 order-xl-2">
            <div class="card-body p-4 p-sm-5">
              <h5 class="card-title">Sign In</h5>
                <p class="card-text mb-4">See your growth and get consulting support!</p>
                <form class="form-body" method="POST" action="{{ route('login') }}">
                  @csrf
                  <div class="row g-3">
                    <div class="col-12">
                      <label for="inputUsername" class="form-label">Username</label>
                      <div class="ms-auto position-relative">
                        <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-person-fill"></i></div>
                        <input type="text" name="username" class="form-control radius-30 ps-5 @error('username') is-invalid @enderror" id="inputUsername" placeholder="Username" value="{{ old('username') }}" required autofocus>
                        @error('username')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
                    </div>
                    <div class="col-12">
                      <label for="inputChoosePassword" class="form-label">Enter Password</label>
                      <div class="ms-auto position-relative">
                        <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-lock-fill"></i></div>
                        <input type="password" name="password" class="form-control radius-30 ps-5 @error('password') is-invalid @enderror" id="inputChoosePassword" placeholder="Password" required>
                        @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="remember" id="flexSwitchCheckChecked" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
                      </div>
                    </div>
                    @if (Route::has('password.request'))
                      <div class="col-6 text-end">	
                        <a href="{{ route('password.request') }}">Forgot Password ?</a>
                      </div>
                    @endif
                    <div class="col-12">
                      <div class="d-grid">
                        <button type="submit" class="btn btn-primary radius-30">Sign In</button>
                      </div>
                    </div>
                  </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
