@extends('user.layouts.main')
@section('content')
  <main class="content">
    <div class="container-fluid p-0">

      <h1 class="h3 mb-3">Selamat Datang di<strong> Pengaturan Pengguna</strong></h1>
      <hr class="my-3" />
      <a class="btn btn-info" href="javascript:void(0)" id="createNewPost"><i class="fa fa-user me-2"></i> Tambah Pengguna
      </a>
      <hr>
      <div class="table-responsive">
        <table class="data-table display nowrap" style="width:100%">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Email</th>
              <th>Role</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="ajaxModelexam" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modelHeading">Pengguna Baru</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
              </button>
            </div>
            <form id="userForm" name="userForm" class="form-horizontal">
              <div class="modal-body">
                <hr>
                <input type="hidden" name="id" id="id">
                <div class="form-group">
                  <label for="name" class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-12">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama"
                      value="" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for='email' class="col-sm-2 control-label">Email</label>
                  <div class="col-sm-12">
                    <input id="email" name="email" required placeholder="Masukkan Email"
                      class="form-control @error('email') is-invalid @enderror">
                    @error('email')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" for="password">Password</label>
                  <div class="form-password-toggle">
                    <div class="input-group input-group-merge">
                      <input type="password" id="password" class="form-control" name="password"
                        aria-describedby="password" placeholder="password" />
                      <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label for='role' class="col-sm-2 control-label">Role</label>
                  <div class="col-sm-12">
                    <select id="role" name="role" class="select2 form-select">
                      <option value="">--Pilih--</option>
                      <option value="Pengguna">Pengguna</option>
                      <option value="Admin Perdata">Admin Perdata</option>
                      <option value="Admin Pidana">Admin Pidana</option>
                      <option value="Admin Hukum">Admin Hukum</option>
                      <option value="Admin Umum">Admin Umum</option>
                      <option value="Admin Posbakum">Admin Posbakum</option>
                      <option value="Master Admin">Master Admin</option>
                    </select>
                  </div>
                </div>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary" id="savedata">Simpan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- Modal -->
    </div>
  </main>
  <script type="text/javascript">
    $(function() {

      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

      var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        dom: 'Bfrtip',
        buttons: [{
          extend: 'print',
          exportOptions: {
            columns: [0, 1, 2, 3]
          },
        }, ],
        ajax: "{{ route('user-table.index') }}",
        columns: [{
            data: 'DT_RowIndex',
            name: 'DT_RowIndex'
          },
          {
            data: 'name',
            name: 'name'
          },
          {
            data: 'email',
            name: 'email'
          },
          {
            data: 'role',
            name: 'role'
          },
          {
            data: 'action',
            name: 'action',
            orderable: false,
            searchable: false
          },
        ]
      });

      $('#createNewPost').click(function() {
        $('#id').val('');
        $('#userForm').trigger("reset");
        $('#modelHeading').html("Daftarkan Pengguna Baru");
        $('#ajaxModelexam').modal('show');
        $("#role").val("");
      });

      $('body').on('click', '.editUser', function() {
        var id = $(this).data('id');
        $.get("{{ route('user-table.index') }}" + '/' + id + '/edit', function(data) {
          $('#modelHeading').html("Edit Data Pengguna");
          $('#ajaxModelexam').modal('show');
          $('#id').val(data.id);
          $('#name').val(data.name);
          $('#password').attr("placeholder", "Kosongkan Apabila Tidak Diupdate");
          $('#email').val(data.email);
          $('#role').val(data.role);
        })
      });

      $('#savedata').click(function(e) {
        e.preventDefault();
        $(this).html('Mengirim..');
        $.ajax({
          data: $('#userForm').serialize(),
          url: "{{ route('user-table.store') }}",
          type: "POST",
          dataType: 'json',
          success: function(data) {
            if ($.isEmptyObject(data.error)) {
              $('#savedata').html("Simpan");
              $('#userForm').trigger("reset");
              $('#ajaxModelexam').modal('hide');
              table.draw();
              Swal.fire({
                title: "Berhasil!",
                text: "Data berhasil dimasukkan!",
                icon: "success"
              });
            } else {
              $('#savedata').html("Simpan");
              printErrorMsg(data.error);
            }
          },
        });

        function printErrorMsg(msg) {
          var string_error = '';
          var error_msg = [];
          $.each(msg, function(key, value) {
            error_msg.push(value);
          });
          error_msg2 = (removeDuplicateValue(error_msg));
          error_msg2.forEach(element => {
            if (element == 'kolom wajib diisi.') {
              pesan = 'Semua kolom wajib diisi!'
            } else {
              pesan = element
            }
            string_error += '' + pesan + '<hr>';
          });


          Swal.fire({
            title: "Gagal!",
            html: string_error,
            icon: "error"
          });
        }

        function removeDuplicateValue(arrayData) {
          return arrayData.filter((value, index) => arrayData.indexOf(value) === index)
        }


      });

      $('body').on('click', '.deleteUser', function() {
        var id = $(this).data("id");
        var konfirmasi = confirm("Apakah anda yakin?");
        if (konfirmasi) {
          $.ajax({
            type: "DELETE",
            url: "{{ route('user-table.store') }}" + '/' + id,
            success: function(data) {
              table.draw();
            },
            error: function(data) {
              console.log('Error:', data);
            }
          });
        }
      });

    });
  </script>
@endsection
