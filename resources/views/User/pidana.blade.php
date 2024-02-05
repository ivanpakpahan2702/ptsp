@extends('user.layouts.main')
@section('content')
  <main class="content">
    <div class="container-fluid p-0" style="overflow-x: auto">

      <h1 class="h3 mb-3">Selamat Datang di<strong> Bagian Pidana</strong></h1>
      <hr class="my-3" />
      @auth
        @if (auth()->user()->role != 'Pengguna' and auth()->user()->role != null and auth()->user()->role == 'Admin Pidana')
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Edit
          </button>
          <hr class="my-3" />
          @if (session()->has('success-pidana'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Berhasil Edit Tampilan Pidana</strong>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif
          <form action="/update-pidana/{{ $pidana->first() == null ? '0' : $pidana->last()->id }}" method="POST">
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
                    <textarea name="article" id="Pidana_article" cols="30" rows="10"></textarea>
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
            $('#Pidana_article').summernote({
              placeholder: 'Tampilan untuk bagian pidana',
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
            }).summernote("code", `{!! $pidana->first() == null ? '' : $pidana->last()->article !!}`);
          </script>
        @else
          <div><br></div>
        @endif
      @endauth
      @if ($pidana->first() != null)
        {!! $pidana->last()->article !!}
      @endif
    </div>
  </main>
@endsection
