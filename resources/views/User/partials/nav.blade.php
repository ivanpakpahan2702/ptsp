<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
  id="layout-navbar">
  <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
    <a class="nav-item nav-link px-0 me-xl-4" href="#">
      <i class="bx bx-menu bx-sm"></i>
    </a>
  </div>

  <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

    <ul class="navbar-nav flex-row align-items-center ms-auto">
      <li class="nav-item lh-1 me-3">
        <div class="box-link border p-3">
          <a href="https://siwas.mahkamahagung.go.id" class="me-2" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-custom-class="tooltip-dark" title="Sistem Informasi Pengawasan Bawas-Mari">Siwas</a>
          <a href="https://pn-tais.go.id" class="me-2">PN Tais</a>
          <a href="http://eptsp.badilum.mahkamahagung.go.id" class="me-2">Badilum</a>
        </div>
      </li>
      <!-- Place Date Here -->
      <li class="nav-item lh-1 me-3">
        <div id="date" class="date">tanggal</div>
        <small id="time" class="time">jam</small>
      </li>

      @auth
        <li class="nav-item lh-1">
          <a href="/chat-room">
            <button type="button" class="btn btn-primary position-relative me-3">
              <i class="fa-solid fa-comment"></i>
              <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger notif-class">
                {{ auth()->user()->getChatCount() }}
                <span class="visually-hidden">Pesan Tidak Terbaca</span>
              </span>
            </button>
          </a>
        </li>
        <!-- Logged User -->
        <li class="nav-item navbar-dropdown dropdown-user dropdown">
          <a class="nav-link dropdown-toggle hide-arrow" href="#" data-bs-toggle="dropdown">
            <div class="avatar avatar-online">
              <img
                src="{{ auth()->user()->avatar_profil != null ? URL::asset('assets/images/account_avatar/' . auth()->user()->avatar_profil . '') : URL::asset('assets/images/account_avatar/default_user.jpg') }}"
                alt class="w-px-40 h-auto rounded-circle" />
            </div>
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li>
              <a class="dropdown-item" href="#">
                <div class="d-flex">
                  <div class="flex-shrink-0 me-3">
                    <div class="avatar avatar-online">
                      <img
                        src="{{ auth()->user()->avatar_profil != null ? URL::asset('assets/images/account_avatar/' . auth()->user()->avatar_profil . '') : URL::asset('assets/images/account_avatar/default_user.jpg') }}"
                        alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <span class="fw-medium d-block">{{ auth()->user()->name }}</span>
                    <small class="text-muted">{{ auth()->user()->role }}</small>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <div class="dropdown-divider"></div>
            </li>
            <li>
              <a class="dropdown-item {{ $title === 'Data & Akun' ? 'active' : '' }}" href="/account">
                <i class="bx bx-user me-2"></i>
                <span class="align-middle">Akun</span>
              </a>
            </li>
            <div class="dropdown-divider"></div>
        </li>
        <li>
          <a class="dropdown-item" href="/logout">
            <i class="bx bx-power-off me-2"></i>
            <span class="align-middle">Keluar</span>
          </a>
        </li>
      </ul>
      </li>
    @else
      <!-- Guest User -->
      <li class="nav-item navbar-dropdown dropdown-user dropdown">
        <a class="nav-link dropdown-toggle hide-arrow" href="#" data-bs-toggle="dropdown">
          <div class="avatar avatar-online">
            <img src="assets/images/avatars/guest.png" alt class="w-px-40 h-auto rounded-circle" />
          </div>
        </a>
        <ul class="dropdown-menu dropdown-menu-end">
          <li>
            <a class="dropdown-item" href="#">
              <div class="d-flex">
                <div class="flex-shrink-0 me-3">
                  <div class="avatar avatar-online">
                    <img src="assets/images/avatars/guest.png" alt class="w-px-40 h-auto rounded-circle" />
                  </div>
                </div>
                <div class="flex-grow-1">
                  <span class="fw-medium d-block">Pengunjung</span>
                  <small class="text-muted">Pengunjung</small>
                </div>
              </div>
            </a>
          </li>
          <li>
            <div class="dropdown-divider"></div>
          </li>
          <li>
            <a class="dropdown-item" href="/login">
              <i class="fa-solid fa-right-to-bracket me-2"></i>
              <span class="align-middle">Masuk</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- Guest User -->
    @endauth
    </ul>
  </div>
</nav>
