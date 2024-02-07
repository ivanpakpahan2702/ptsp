@extends('authentication.layouts.main')
@section('content')
  <!-- Content -->
  <div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner">
        <!-- Register Card -->
        <div class="card">
          <div class="card-body">
            <!-- Logo -->
            <div class="app-brand justify-content-center">
              <a href="/" class="app-brand-link gap-2">
                <span class="app-brand-logo demo">
                  <img src="assets/images/logos/icons8-law-96.png" alt="" width="35">
                </span>
                <span class="app-brand-text demo text-body fw-bold">ptsp</span>
              </a>
            </div>
            <!-- /Logo -->
            <h4 class="mb-2">Silahkan mengisi formulir di bawah ini. </h4>
            <p class="mb-4">Data yang diketik harus yang sebenarnya</p>

            <form id="formAuthentication" class="mb-3" action="/register" method="POST">
              @csrf
              <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                  name="name" placeholder="Masukkan nama lengkap" autofocus value="{{ old('name') }}" />
                @error('name')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="mb-3 has-validation">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email"
                  name="email" placeholder="Masukkan email anda" value="{{ old('email') }}" />
                @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="mb-3 form-password-toggle">
                <label class="form-label" for="password">Kata Sandi</label>
                <div class="input-group input-group-merge">
                  <input type="password" id="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" placeholder="Masukkan kata sandi" value="{{ old('password') }}" />
                  <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  @error('password')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>

              <div class="mb-3">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms" required />
                  <label class="form-check-label" for="terms-conditions">
                    Saya setuju akan
                    <a href="#">syarat & kebijakan privasi</a> yang diterapkan.
                  </label>

                </div>
              </div>
              <button class="btn btn-primary d-grid w-100" type="submit">Daftar</button>
            </form>

            <p class="text-center">
              <span>Sudah punya akun?</span>
              <a href="/login">
                <span>Halaman Login</span>
              </a>
            </p>
          </div>
        </div>
        <!-- Register Card -->
      </div>
    </div>
  </div>
  <!-- / Content -->
@endsection