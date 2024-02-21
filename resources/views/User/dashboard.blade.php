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
            <i class="fa fa-pen"></i>
          </button>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#carouselModal">
            <i class="fa fa-camera"></i>
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
      @if ($carousel_array)
        <div id="carouselExample" class="carousel-fade carousel slide col-md-8 offset-md-2" data-bs-ride="carousel">
          <div class="carousel-indicators">
            @foreach ($carousel_array as $carousel)
              <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="{{ $loop->index }}"
                class={{ $loop->index == 0 ? 'active' : '' }}></button>
            @endforeach
          </div>
          <div class="carousel-inner">
            @foreach ($carousel_array as $carousel)
              <div class="carousel-item {{ $loop->index == 0 ? 'active' : '' }}">
                <img class="d-block w-100" src="/assets/images/carousel/{{ $carousel }}"
                  alt="{{ $loop->index }} slide" />
              </div>
            @endforeach
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
        <hr>
      @endif
      <br>
      @if ($dashboard->first() != null)
        {!! $dashboard->last()->article !!}
        <br>
      @endif
      <br>
      <!-- Admin PTSP Gallery -->
      <div style="text-align: center;"><b><span style="font-size: 24px; font-family: &quot;Comic Sans MS&quot;;">Petugas
            PTSP</span></b></div>
      <br>
      <div class="tz-gallery text-center">
        <div class="row" style="margin: auto">
          <div class="col-md-4 p-2">
            <a href="/assets/images/admin/Kuswandi_Pakpahan.jpg" data-fancybox="gallery"
              data-caption="Admin PTSP - Kuswandi Pakpahan">
              <img src="/assets/images/admin/Kuswandi_Pakpahan.jpg" alt="" width="280px" class="rounded">
            </a>
            <div class="card-body">
              Admin PTSP
              <br>
              <small>
                Kuswandi Pakpahan
              </small>
            </div>
          </div>
          <div class="col-md-4 p-2">
            <a href="/assets/images/admin/Kuswandi_Pakpahan.jpg" data-fancybox="gallery"
              data-caption="Admin PTSP - Kuswandi Pakpahan">
              <img src="/assets/images/admin/Kuswandi_Pakpahan.jpg" alt="" width="280px" class="rounded">
            </a>
            <div class="card-body">
              Admin PTSP
              <br>
              <small>
                Kuswandi Pakpahan
              </small>
            </div>
          </div>
          <div class="col-md-4 p-2">
            <a href="/assets/images/admin/Kuswandi_Pakpahan.jpg" data-fancybox="gallery"
              data-caption="Admin PTSP - Kuswandi Pakpahan">
              <img src="/assets/images/admin/Kuswandi_Pakpahan.jpg" alt="" width="280px" class="rounded">
            </a>
            <div class="card-body">
              Admin PTSP
              <br>
              <small>
                Kuswandi Pakpahan
              </small>
            </div>
          </div>
        </div>
      </div>
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
  @if (session()->has('Delete-Carousel'))
    <script>
      const sweetDeleteCarousel = () => {
        Swal.fire({
          title: "Hapus Carousel!",
          text: "{{ Session::get('Delete-Carousel') }}",
          icon: "info"
        });
      }
      const show_alert = setTimeout(sweetDeleteCarousel, 2000);
    </script>
  @endif

  @if (session()->has('Upload-Carousel'))
    <script>
      const sweetUploadCarousel = () => {
        Swal.fire({
          title: "Upload Carousel!",
          text: "{{ Session::get('Upload-Carousel') }}",
          icon: "info"
        });
      }
      const show_alert = setTimeout(sweetUploadCarousel, 2000);
    </script>
  @endif
  @auth
    @if (auth()->user()->role != 'Pengguna' and auth()->user()->role != null)
      {{-- Modal For Update Carousel --}}
      <div class="modal fade" id="carouselModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
          <div sclass="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Foto Carousel</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div align='left'>
                @foreach ($carousel_array as $carousel)
                  <form action="/delete-carousel/{{ $carousel }}" class="d-inline" method="POST"
                    onsubmit="return confirm('Apakah anda yakin untuk menghapus foto ini?');">
                    @csrf
                    @method('delete')
                    <span class='pipCarousel'>
                      <input type="hidden" name="file_name" value="{{ $carousel }}">
                      <img class='imageThumbCarousel' src='/assets/images/carousel/{{ $carousel }}'
                        title='{{ $carousel }}' />
                      <br />
                      <button type="submit" class='remove mx-auto'>
                        <i class='fa-solid fa-xmark'></i>
                      </button>
                    </span>
                  </form>
                @endforeach
              </div>
              <hr>
              Upload Foto Baru
              <br>
              <br>
              <form action="/upload-carousel" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="total_files" id="total-files">
                <div class="field" align="left">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="input-group form-upload">
                        <input required type="file" class="form-control" id="carousel_images"
                          name="carousel_images[]" multiple aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                        <button class="btn btn-secondary" type="submit" id="inputGroupFileAddon04">Upload</button>
                      </div>
                    </div>
                  </div>
                  @error('carousel_images.*')
                    <div class="invalid-feedback d-block mb-2">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <br><br>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
          </div>
        </div>
      </div>
      <script>
        $(document).ready(function() {
          if (window.File && window.FileList && window.FileReader) {
            $("#carousel_images").on("change", function(e) {
              $('.pip').empty();
              var files = e.target.files,
                filesLength = files.length;
              $("#total-files").val(filesLength);
              for (var i = 0; i < filesLength; i++) {
                var f = files[i]
                var fileReader = new FileReader();
                fileReader.fileName = f.name;
                fileReader.onload = (function(e) {
                  var file = e.target;
                  $("<span class='pip' title='" + e.target.fileName + "'><img class='imageThumb' src='" + e.target
                      .result + "' title='" + e.target.fileName +
                      "'/><br/><span class='remove'><i class='fa fa-trash'></i></span></span>")
                    .insertAfter(
                      ".form-upload");
                  $(".remove").click(function() {
                    $(this).parent(".pip").remove();
                    // Cari Item Yang Mau Dihapus
                    $item = ($(this).parent(".pip").attr("title"));
                    var $array_file = [];
                    for (var i = 0; i < files.length; i++) {
                      $array_file.push(files[i].name);
                    }
                    // Cari Item Yang Mau Dihapus
                    removeFileFromFileList($item);
                  });
                });
                fileReader.readAsDataURL(f);

                function removeFileFromFileList(name_file) {
                  const dt = new DataTransfer()
                  const input = document.getElementById('carousel_images')
                  const {
                    files
                  } = input

                  for (let i = 0; i < files.length; i++) {
                    const file = files[i]
                    if (name_file !== file.name)
                      dt.items.add(file) // here you exclude the file. thus removing it.
                  }
                  input.files = dt.files // Assign the updates list
                  console.log(input.files);
                }
              }
            });
          } else {
            alert("Your browser doesn't support to File API")
          }
        });
      </script>
    @endif
  @endauth
@endsection
