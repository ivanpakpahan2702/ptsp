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
            <script>
              const sweetDashboard = () => {
                Swal.fire({
                  title: "Berhasil!",
                  text: "Tampilan Dashbord Diubah",
                  icon: "success"
                });
              }
              const show_alert = setTimeout(sweetDashboard, 2000);
            </script>
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
              placeholder: 'Tampilan untuk dashboard, Tekan Shift+Enter Untuk Paragraf Baru Yang Tidak Jauh',
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
      <div id="carouselExample" class="carousel-fade carousel slide col-md-8 offset-md-2" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"></button>
          <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1"></button>
          <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="assets/sneat/assets/img/elements/13.jpg" alt="First slide" />
            <div class="carousel-caption d-none d-md-block">
              <h3>First slide</h3>
              <p>Eos mutat malis maluisset et, agam ancillae quo te, in vim congue pertinacia.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="assets/sneat/assets/img/elements/2.jpg" alt="Second slide" />
            <div class="carousel-caption d-none d-md-block">
              <h3>Second slide</h3>
              <p>In numquam omittam sea.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="assets/sneat/assets/img/elements/18.jpg" alt="Third slide" />
            <div class="carousel-caption d-none d-md-block">
              <h3>Third slide</h3>
              <p>Lorem ipsum dolor sit amet, virtute consequat ea qui, minim graeco mel no.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExample" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </a>
      </div>
      <br>
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
  @if (session()->has('Success-Register'))
    <script>
      const sweetRegister = () => {
        Swal.fire({
          title: "Berhasil Mendaftar!",
          text: "Silahkan Cek Surel Email, Untuk Verifikasi",
          icon: "success"
        });
      }
      const show_alert = setTimeout(sweetRegister, 2000);
    </script>
  @endif
@endsection
