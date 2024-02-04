@extends('user.layouts.main')
@section('content')
  <main class="content">
    <div class="container-fluid p-0">

      <h1 class="h3 mb-3">Selamat Datang di<strong> PTSP-PN Tais</strong></h1>
      <hr class="my-3" />
      @if (auth()->user()->role != 'Pengguna' and auth()->user()->role != null)
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Edit
        </button>
        <hr class="my-3" />

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Artikel</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <textarea name="article" id="Dashboard_article" cols="30" rows="10"></textarea>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary">Simpan</button>
              </div>
            </div>
          </div>
        </div>
        <script>
          $('#Dashboard_article').summernote({
            placeholder: 'Hello stand alone ui',
            tabsize: 2,
            height: 120,
            toolbar: [
              ['style', ['style']],
              ['font', ['bold', 'underline', 'clear']],
              ['color', ['color']],
              ['para', ['ul', 'ol', 'paragraph']],
              ['table', ['table']],
              ['insert', ['link', 'picture', 'video']],
              ['view', ['fullscreen', 'codeview', 'help']]
            ]
          }).summernote('code', `{!! $dashboard->first()->article !!}`);;
        </script>
      @else
        <div><br></div>
      @endif
      {!! $dashboard->first()->article !!}
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
        Halo @auth
          {{ auth()->user()->name }}
        @else
          Pengunjung
        @endauth
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
