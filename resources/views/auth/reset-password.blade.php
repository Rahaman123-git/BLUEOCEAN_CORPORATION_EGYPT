@extends('layouts.auth')

@section('content')
  <div class="container-fluid">
    <div class="authentication-card">
      <div class="card shadow rounded-0 overflow-hidden">
        <div class="row g-0">
          <div class="col-lg-6 d-flex align-items-center justify-content-center border-end">
            <img src="{{ asset('assets/backend/images/error/forgot-password-frent-img.jpg') }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6">
            <div class="card-body p-4 p-sm-5">
              <h5 class="card-title">Genrate New Password</h5>
              <p class="card-text mb-5">We received your reset password request. Please enter your new password!</p>
              <form class="form-body" method="POST" action="{{ route('password.store') }}">
                @csrf
                <!-- Password Reset Token -->
                <input type="hidden" name="token" value="{{ $request->route('token') }}">
                <div class="row g-3">
                  <div class="col-12">
                    <label for="email" class="form-label">Email Id.</label>
                    <div class="ms-auto position-relative">
                      <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-lock-fill"></i></div>
                      <input type="email" name="email" id="email" class="form-control radius-30 ps-5 @error('email') is-invalid @enderror" placeholder="Email Id." value="{{ old('email', $request->email) }}" required autofocus autocomplete="username">
                      @error('email')
                        <div id="email" class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>
                  <div class="col-12">
                    <label for="password" class="form-label">New Password</label>
                    <div class="ms-auto position-relative">
                      <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-lock-fill"></i></div>
                      <input type="password" name="password" id="password" class="form-control radius-30 ps-5 @error('password') is-invalid @enderror" placeholder="Enter New Password" required autocomplete="new-password">
                      @error('password')
                        <div id="password" class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>
                  <div class="col-12">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <div class="ms-auto position-relative">
                      <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-lock-fill"></i></div>
                      <input type="password" name="password_confirmation" id="password_confirmation" class="form-control radius-30 ps-5 @error('password_confirmation') is-invalid @enderror" placeholder="Confirm Password" required autocomplete="new-password">
                      @error('password_confirmation')
                        <div id="password_confirmation" class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="d-grid gap-3">
                      <button type="submit" class="btn btn-primary radius-30">Change Password</button>
                      <a href="{{ route('login') }}" class="btn btn-light radius-30">Back to Login</a>
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