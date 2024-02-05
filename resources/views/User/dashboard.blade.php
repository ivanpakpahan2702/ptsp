@extends('user.layouts.main')
@section('content')
  <main class="content">
    <div class="container-fluid p-0" style="overflow-x: auto">

      <h1 class="h3 mb-3">Selamat Datang di<strong> PTSP-PN Tais</strong></h1>
      <hr class="my-3" />
      @auth
        @if (auth()->user()->role != 'Pengguna' and auth()->user()->role != null)
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Edit
          </button>
          <hr class="my-3" />
          @if (session()->has('success-dashboard'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Berhasil Edit Dashboard</strong>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif
          <form action="/update-dashboard/{{ $dashboard->first() == null ? '0' : $dashboard->last()->id }}" method="POST">
            @csrf
            @method('PUT')
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-fullscreen">
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
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
          <script>
            $('#Dashboard_article').summernote({
              placeholder: 'Tampilan untuk dashboard',
              tabsize: 2,
              height: 420,
              toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['fontname', ['fontname']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['help', 'codeview']]
              ]
            }).summernote("code", `{!! $dashboard->first() == null ? '' : $dashboard->last()->article !!}`);
          </script>
        @else
          <div><br></div>
        @endif
      @endauth
      @if ($dashboard->first() != null)
        {!! $dashboard->last()->article !!}
      @endif
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
