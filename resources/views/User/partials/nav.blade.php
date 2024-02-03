<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
  id="layout-navbar">
  <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
    <a class="nav-item nav-link px-0 me-xl-4" href="#">
      <i class="bx bx-menu bx-sm"></i>
    </a>
  </div>

  <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

    <ul class="navbar-nav flex-row align-items-center ms-auto">
      <!-- Place Date Here -->
      <li class="nav-item lh-1 me-3">
        <div id="date" class="date">tanggal</div>
        <small id="time" class="time">jam</small>
      </li>

      @auth
        <!-- Logged User -->
        <li class="nav-item navbar-dropdown dropdown-user dropdown">
          <a class="nav-link dropdown-toggle hide-arrow" href="#" data-bs-toggle="dropdown">
            <div class="avatar avatar-online">
              <img src="storage/avatars/{{ auth()->user()->avatar }}" alt class="w-px-40 h-auto rounded-circle" />
            </div>
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li>
              <a class="dropdown-item" href="#">
                <div class="d-flex">
                  <div class="flex-shrink-0 me-3">
                    <div class="avatar avatar-online">
                      <img src="storage/avatars/{{ auth()->user()->avatar }}" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <span class="fw-medium d-block">{{ auth()->user()->name }}</span>
                    <small class="text-muted">Pengguna</small>
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
