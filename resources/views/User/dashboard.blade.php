@extends('user.layouts.main')
@section('content')
  <main class="content">
    <div class="container-fluid p-0">

      <h1 class="h3 mb-3">Selamat Datang di<strong> PTSP-PN Tais</strong></h1>
      @foreach ($dashboard as $d)
        {!! $d->article !!}
      @endforeach
    </div>
  </main>
  <div class="toast-container position-fixed top-0 end-0 p-3 " style="z-index: 9999 ">
    <div id="liveToast" class="toast bg-secondary" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="toast-header">
        <img src={{ URL::asset('assets/images/avatars/icon_admin.png') }} class="rounded me-2" alt="Logo"
          width="35">
        <strong class="me-auto">Admin PTSP</strong>
        <small>0 detik yang lalu</small>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      <div class="toast-body">
        Halo... Pengujung
      </div>
    </div>
  </div>
  <script>
    window.onload = (event) => {
      var toastLiveExample = document.getElementById('liveToast')
      var toast = new bootstrap.Toast(toastLiveExample)
      toast.show()
    }
  </script>
@endsection
