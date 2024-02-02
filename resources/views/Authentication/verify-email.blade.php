@extends('authentication.layouts.main')

@section('content')
  <!-- Content -->
  <div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner">
        <div class="card">
          <div class="card-body">
            <!-- Logo -->
            <div class="app-brand justify-content-center">
              <a href="/" class="app-brand-link gap-2">
                <span class="app-brand-logo demo">
                  <img src={{ URL::asset('assets/images/logos/icons8-law-96.png') }} alt="" width="35">
                </span>
                <span class="app-brand-text demo text-body fw-bold">ptsp</span>
              </a>
            </div>
            <!-- /Logo -->
            <h4 class="mb-2">Selamat datang di layanan PTSP PN Tais</h4>
            <p class="mb-4">Silahkan melakukan verifikasi dengan email yang telah anda daftarkan</p>
            <p class="mb-4">Tidak mendapatkan link? atau link telah expired? silahkan meminta pengiriman ulang
            </p>
            @if (session()->has('message'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
            <form action="/email/verification-notification" method="POST">
              @csrf
              <button class="btn btn-success" type="submit">Kirim Ulang</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- / Content -->
@endsection
