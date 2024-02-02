@extends('authentication.layouts.main')
@section('content')
  <div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner">
        <!-- Login -->
        <div class="card">
          <div class="card-body">
            @if (session()->has('error'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Gagal Masuk!</strong> Data yang dimasukkan tidak terdaftar.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
            @if (session()->has('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Berhasil mendaftar!</strong> Silahkan masuk menggunakan data yang sudah didaftarkan.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
            @if ($errors->any())
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>
                  Terjadi kesalahan.
                </strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @elseif(Session::has('status'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>
                  {{ session('status') }}
                </strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
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
            <h4 class="mb-2">Selamat datang di layanan PTSP PN Tais</h4>
            <p class="mb-4">Silahkan masukkan data akun anda</p>

            <form id="formAuthentication" class="mb-3" action="/login" method="POST">
              @csrf
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email"
                  name="email" placeholder="Masukkan email" autofocus />
                @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="mb-3 form-password-toggle">
                <div class="d-flex justify-content-between">
                  <label class="form-label" for="password">Kata Sandi</label>
                  <a href="/forgot-password">
                    <small>Lupa Password?</small>
                  </a>
                </div>
                <div class="input-group input-group-merge">
                  <input type="password" id="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" aria-describedby="password" />
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
                  <input class="form-check-input" type="checkbox" id="remember-me" name="remember" />
                  <label class="form-check-label" for="remember-me"> Ingat saya </label>
                </div>
              </div>
              <div class="mb-3">
                <button class="btn btn-primary d-grid w-100" type="submit">Masuk</button>
              </div>
            </form>

            <p class="text-center">
              <span>Belum mendaftar?</span>
              <a href="/register">
                <span>Buat Akun</span>
              </a>
            </p>
          </div>
        </div>
        <!-- /Login -->
      </div>
    </div>
  </div>
@endsection
