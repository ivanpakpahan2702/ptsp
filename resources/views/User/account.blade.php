@extends('user.layouts.main')
@section('content')
  <main class="content">
    <form id="formAccountSettings" method='POST' action="{{ url('/update-profil/' . $user->id) }}"
      enctype="multipart/form-data">
      @method('PUT')
      @csrf
      <div class="card mb-4">
        <h5 class="card-header">Detail Data dan Akun</h5>
        @if (session()->has('success-profil'))
          <script>
            const sweetProfil = () => {
              Swal.fire({
                title: "Berhasil!",
                text: "Berhasil Ubah Profil",
                icon: "success"
              });
            }
            const show_alert = setTimeout(sweetProfil, 2000);
          </script>
        @endif
        @if (session()->has('success-pass'))
          <script>
            const sweetPassword = () => {
              Swal.fire({
                title: "Berhasil!",
                text: "Password Telah Diubah",
                icon: "success"
              });
            }
            const show_alert = setTimeout(sweetPassword, 2000);
          </script>
        @endif
        <!-- Account -->
        <div class="card-body mb-3">
          @error('avatar_profil')
            <div class="invalid-feedback d-block mb-2">
              {{ $message }}
            </div>
          @enderror
          <div class="d-flex align-items-start align-items-sm-center gap-4">
            <img
              src="{{ $user->avatar_profil != null ? URL::asset('Storage/' . $user->avatar_profil . '') : URL::asset('assets/images/avatars/no_image.jpg') }}"
              alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar" />
            <div class="button-wrapper">
              <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                <span class="d-none d-sm-block">Upload foto baru</span>
                <i class="bx bx-upload d-block d-sm-none"></i>
                <input type="file" id="upload" name="avatar_profil"
                  class="account-file-input @error('avatar_profil') is-invalid @enderror" hidden
                  accept="image/png, image/jpeg" onchange="readUrl(this)" />
              </label>


              <button id="resetButton" type="button" class="btn btn-outline-secondary mb-4">
                <i class="bx bx-reset d-block d-sm-none"></i>
                <span class="d-none d-sm-block">Hapus</span>
              </button>
              <p class="text-muted mb-0">Format yang diizinkan ('png,jpg,jpeg'). Ukuran maksimum 1 MB</p>
            </div>
          </div>
        </div>
        <hr class="my-0" />
        <div class="card-body">
          <div class="row">
            <div class="mb-3 col-md-6">
              <label for="name" class="form-label">Nama Lengkap</label>
              <input class="form-control @error('name') is-invalid @enderror" type="text" id="name" name="name"
                value="{{ old('name') === null ? $user->name : old('name') }}" autofocus />
              @error('name')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3 col-md-6">
              <label for="email" class="form-label">E-mail</label>
              <input class="form-control @error('email') is-invalid @enderror" type="text" id="email"
                name="email" value="{{ old('email') === null ? $user->email : old('email') }}" />
              @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3 col-md-6">
              <label for="nik" class="form-label">NIK</label>
              <input class="form-control @error('nik') is-invalid @enderror" type="text" id="nik" name="nik"
                value="{{ old('nik') === null ? $user->nik : old('nik') }}" placeholder="Nomor Induk Kependudukan" />
              @error('nik')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3 col-md-6">
            </div>
            <div class="mb-3 col-md-6">
              <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
              <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"
                value="{{ old('tempat_lahir') === null ? $user->tempat_lahir : old('tempat_lahir') }}" />
            </div>
            <div class="mb-3 col-md-6">
              <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
              <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"
                value="{{ old('tanggal_lahir') === null ? $user->tanggal_lahir : old('tanggal_lahir') }}" />
            </div>
            <div class="mb-3 col-md-6">
              <label class="form-label" for="agama">Agama</label>
              <select id="agama" class="select2 form-select" name="agama">
                <option value="">-- Pilih Agama --</option>
                <option value="Islam" {{ $user->agama == 'Islam' ? 'selected' : '' }}>Islam</option>
                <option value="Kristen Protestan" {{ $user->agama == 'Kristen Protestan' ? 'selected' : '' }}>Kristen
                  Protestan</option>
                <option value="Kristen Katolik" {{ $user->agama == 'Kristen Katolik' ? 'selected' : '' }}>Kristen
                  Katolik
                </option>
                <option value="Hindu" {{ $user->agama == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                <option value="Buddha" {{ $user->agama == 'Buddha' ? 'selected' : '' }}>Buddha</option>
                <option value="Konghucu" {{ $user->agama == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
              </select>
            </div>
            <div class="mb-3 col-md-6">
              <label for="number" class="form-label">No HP</label>
              <input type="text" class="form-control" id="number" name="no_telpon" placeholder="Nomor Hp Aktif"
                value="{{ old('no_telpon') === null ? $user->no_telpon : old('no_telpon') }}" />
            </div>
            <div class="mb-3 col-md-6">
              <label for="alamat" class="form-label">Alamat</label>
              <textarea class="form-control" type="text" id="alamat" name="alamat" placeholder="Alamat Sesuai KTP"
                rows="3">{{ old('alamat') === null ? $user->alamat : old('alamat') }}</textarea>
            </div>
            <div class="mb-3 col-md-6">
              <label for="kode_pos" class="form-label">Kode Pos</label>
              <input type="text" class="form-control" id="kode_pos" name="kode_pos"
                placeholder="Kode Pos Alamat Anda" maxlength="9"
                value="{{ old('kode_pos') === null ? $user->kode_pos : old('kode_pos') }}" />
            </div>
            <div class="mb-3 col-md-6">
              <label class="form-label" for="kewarganegaraan">Kewarganegaraan</label>
              <input type="text" name="kewarganegaraan" id="kewarganegaraan" class="form-control"
                value="{{ old('kewarganegaraan') === null ? $user->kewarganegaraan : old('kewarganegaraan') }}"
                placeholder="Ex: Indonesia, Malaysia, ..">
            </div>
            <div class="mb-3 col-md-6">
              <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
              <select id="jenis_kelamin" name="jenis_kelamin" class="select2 form-select">
                <option value="">--Pilih--</option>
                <option value="p" {{ $user->jenis_kelamin == 'p' ? 'selected' : '' }}>Laki-Laki</option>
                <option value="w" {{ $user->jenis_kelamin == 'w' ? 'selected' : '' }}>Wanita</option>
              </select>
            </div>
          </div>
          <div class="mt-2">
            <button type="submit" class="btn btn-primary me-2">Simpan</button>
          </div>
        </div>
    </form>
    <hr class="my-3" />
    <div class="card-body">
      <form action="{{ url('/update-password/' . $user->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="row">
          <div class="mb-3 col-md-6 form-password-toggle">
            <div class="d-flex justify-content-between">
              <label class="form-label" for="password">Kata Sandi Baru</label>
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
            <div class="mb-3 col-md-6">
              <button type="submit" class="mt-3 btn btn-primary">Ubah
                Password</button>
            </div>
          </div>
        </div>
      </form>
    </div>
    <!-- /Account -->
    <div class="card">
      <h5 class="card-header">Hapus Akun</h5>
      <div class="card-body">
        <div class="mb-3 col-12 mb-0">
          <div class="alert alert-warning">
            <h6 class="alert-heading mb-1">Apakah anda yakin untuk menghapus akun anda?</h6>
            <p class="mb-0">Saat anda menghapus akun anda, semua data yang telah anda daftarkan akan terhapus.</p>
          </div>
        </div>
        <form id="formAccountDeactivation" action="{{ url('/delete-profil/' . $user->id) }}" method="POST">
          @csrf
          @method('delete')
          <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" name="accountActivation" id="accountActivation"
              required />
            <label class="form-check-label" for="accountActivation">Saya mengkonfirmasi penghapusan akun saya</label>
          </div>
          <button type="submit" class="btn btn-danger deactivate-account">Hapus Akun</button>
        </form>
      </div>
    </div>
  </main>
  <script>
    var image_frame = document.getElementById("uploadedAvatar");
    var inputFile = document.getElementById("upload");

    function readUrl(input) {
      if (input.files) {
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload = (e) => {
          image_frame.src = e.target.result;
        }
      }
    }
  </script>

  <script>
    $('#resetButton').on({
      'click': function() {
        $('#uploadedAvatar').attr('src', '{{ URL::asset('assets/images/avatars/no_image.jpg') }}');
        $('#upload').val(null);
      }
    });
  </script>
@endsection
