@extends('user.layouts.main')
@section('content')
  <main class="content">
    <div class="container-fluid p-0" style="overflow-x: auto">

      <h1 class="h3 mb-3">Selamat Datang di<strong> Bagian Hukum</strong></h1>
      <hr class="my-3" />
      @auth
        @if (auth()->user()->role != 'Pengguna' and auth()->user()->role != null and auth()->user()->role == 'Admin Hukum' or
                auth()->user()->role == 'Master Admin')
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="fa fa-pen"></i>
          </button>
          <hr class="my-3" />
          @if (session()->has('success-hukum'))
            <script>
              const sweetHukum = () => {
                Swal.fire({
                  title: "Berhasil!",
                  text: "Tampilan Bagian Hukum Diubah",
                  icon: "success"
                });
              }
              const show_alert = setTimeout(sweetHukum, 2000);
            </script>
          @endif
          <form action="/update-hukum/{{ $hukum->first() == null ? '0' : $hukum->last()->id }}" method="POST">
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
                    <textarea name="article" id="Hukum_article" cols="30" rows="10"></textarea>
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
            $('#Hukum_article').summernote({
              placeholder: 'Tampilan untuk hukum, Tekan Shift+Enter Untuk Paragraf Baru Yang Tidak Jauh',
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
            }).summernote("code", `{!! $hukum->first() == null ? '' : $hukum->last()->article !!}`);
          </script>
        @else
          <div><br></div>
        @endif
      @endauth
      @if ($hukum->first() != null)
        {!! $hukum->last()->article !!}
      @endif
    </div>
  </main>
@endsection
