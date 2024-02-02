@extends('authentication.layouts.main')
@section('content')
<!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner py-4">
          <!-- Forgot Password -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <a href="index.html" class="app-brand-link gap-2">
                  <span class="app-brand-logo demo">
                    <img src={{ URL::asset("assets/images/logos/icons8-law-96.png") }} alt="" width="35">
                  </span>
                  <span class="app-brand-text demo text-body fw-bold">ptsp</span>
                </a>
              </div>
              <!-- /Logo -->
              <h4 class="mb-2">Form Setel Ulang Password 🔒</h4>
              <p class="mb-4">Masukkan Password baru</p>
              <form id="formAuthentication" class="mb-3" action="/reset-password" method="POST">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <input type="hidden" name="email" value="{{ $email }}">
                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Kata Sandi Baru</label>
                  </div>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password"
                      class="form-control @error('password') is-invalid @enderror"
                      name="password"
                      placeholder="Masukkan Kata Sandi Baru"
                      aria-describedby="password" />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                    @error('password')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
                  </div>
                </div>
                <button class="btn btn-primary d-grid w-100">Reset Password</button>
              </form>
              <div class="text-center">
                <a href="/login" class="d-flex align-items-center justify-content-center">
                  <i class="bx bx-chevron-left scaleX-n1-rtl bx-sm"></i>
                  Kembali ke halaman login
                </a>
              </div>
            </div>
          </div>
          <!-- /Forgot Password -->
        </div>
      </div>
    </div>

    <!-- / Content -->
@endsection