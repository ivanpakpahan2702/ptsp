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
                    <img src="assets/images/logos/icons8-law-96.png" alt="" width="35">
                  </span>
                  <span class="app-brand-text demo text-body fw-bold">ptsp</span>
                </a>
              </div>
              <!-- /Logo -->
              
              <h4 class="mb-2">Lupa Password? 🔒</h4>
              <p class="mb-4">Masukkan email anda yang telah terverifikasi, agar kami dapat mengirimkan instruksi selanjutnya</p>
              <form id="formAuthentication" class="mb-3" action="/forgot-password" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input
                    type="text"
                    class="form-control  @error('email') is-invalid @enderror"
                    id="email"
                    name="email"
                    placeholder="Enter your email"
                    autofocus />
                    @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
                </div>
                <button class="btn btn-primary d-grid w-100">Kirim Reset Password</button>
                @if ($errors->any())
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>
                    @foreach ($errors->all() as $error)
                      {{ $error }}
                    @endforeach
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