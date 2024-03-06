<!-- Menu -->
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="app-brand demo">
    <a href="/" class="app-brand-link">
      <span class="app-brand-logo demo">
        <img src="assets/images/logos/icons8-law-96.png" alt="" width="35">
      </span>
      <span class="app-brand-text demo menu-text fw-bold ms-2">PTSP</span>
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
      <i class="bx bx-chevron-left bx-sm align-middle"></i>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">

    <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Halaman</span>
    </li>

    <!-- Dashboards -->
    <li class="menu-item {{ $title === 'Dashboard' ? 'active open' : '' }}">
      <a href="/" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div>Dashboard</div>
      </a>
    </li>

    <!-- Perdata -->
    <li class="menu-item {{ $title === 'Bagian Perdata' ? 'active open' : '' }}">
      <a href="/bagian-perdata" class="menu-link">
        <i class="menu-icon tf-icons bx bx-clipboard"></i>
        <div>Bagian Perdata</div>
      </a>
    </li>

    <!-- Pidana -->
    <li class="menu-item {{ $title === 'Bagian Pidana' ? 'active open' : '' }}">
      <a href="/bagian-pidana" class="menu-link">
        <i class="menu-icon tf-icons bx bx-briefcase"></i>
        <div>Bagian Pidana</div>
      </a>
    </li>

    <!-- Hukum -->
    <li class="menu-item {{ $title === 'Bagian Hukum' ? 'active open' : '' }}">
      <a href="/bagian-hukum" class="menu-link">
        <i class="menu-icon tf-icons bx bx-book-bookmark"></i>
        <div>Bagian Hukum</div>
      </a>
    </li>

    <!-- Umum -->
    <li class="menu-item {{ $title === 'Bagian Umum & Keuangan' ? 'active open' : '' }}">
      <a href="/bagian-umum" class="menu-link">
        <i class="menu-icon tf-icons bx bx-dollar-circle"></i>
        <div>Umum & Keuangan</div>
      </a>
    </li>

    <!-- Posbakum -->
    <li class="menu-item {{ $title === 'Posbakum' ? 'active open' : '' }}">
      <a href="/posbakum" class="menu-link">
        <i class="menu-icon tf-icons bx bx-shield"></i>
        <div>Posbakum</div>
      </a>
    </li>

    <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Fitur</span>
    </li>

    <!-- Chat Room -->
    <li class="menu-item">
      <a href="/chat-room" class="menu-link">
        <i class="menu-icon tf-icons bx bx-chat"></i>
        <div>PTSP Chat Room</div>
      </a>
    </li>
    <!-- Aplikasi -->
    <li class="menu-item">
      <a href="https://eraterang.badilum.mahkamahagung.go.id" class="menu-link" data-bs-toggle="tooltip"
        data-bs-offset="0,4" data-bs-placement="top" data-bs-custom-class="tooltip-dark"
        title="Elektronik Surat Keterangan Badilum MA RI">
        <img src="https://www.pn-tais.go.id/wp-content/uploads/2021/04/Untitled-design-2.png" alt="logo"
          width="25" class="me-2">
        <div>Eraterang</div>
      </a>
    </li>
    <!-- Aplikasi -->
    <li class="menu-item">
      <a href="https://ecourt.mahkamahagung.go.id" class="menu-link" data-bs-toggle="tooltip" data-bs-offset="0,4"
        data-bs-placement="top" data-bs-custom-class="tooltip-dark" title="e-Court Mahkamah Agung RI">
        <img src="https://www.pn-tais.go.id/wp-content/uploads/2021/04/Untitled-design-3.png" alt="logo"
          width="25" class="me-2">
        <div>Ecourt</div>
      </a>
    </li>
    <!-- Aplikasi -->
    <li class="menu-item">
      <a href="https://sipp.pn-tais.go.id" class="menu-link" data-bs-toggle="tooltip" data-bs-offset="0,4"
        data-bs-placement="top" data-bs-custom-class="tooltip-dark"
        title="Sistem Informasi Penelusuran Perkara PN Tais">
        <img src="https://www.pn-tais.go.id/wp-content/uploads/2021/04/quard-sipp.png" alt="logo" width="25"
          class="me-2">
        <div>SIPP</div>
      </a>
    </li>
    <!-- Aplikasi -->
    <li class="menu-item">
      <a href="https://putusan3.mahkamahagung.go.id" class="menu-link">
        <img src="https://www.pn-tais.go.id/wp-content/uploads/2021/04/logo-dirput-1.png" alt="logo" width="25"
          class="me-2">
        <div>Direktori Putusan PN-Tais</div>
      </a>
    </li>
    <!-- Aplikasi -->
    <li class="menu-item">
      <a href="https://eberpadu.mahkamahagung.go.id/#layanan" class="menu-link" data-bs-toggle="tooltip"
        data-bs-offset="0,4" data-bs-placement="top" data-bs-custom-class="tooltip-dark"
        title="Elektronik Berkas Pidana Terpadu MA RI">
        <img src="https://eberpadu.mahkamahagung.go.id/assets/berpadu/images/logo-full.png" alt="logo"
          width="25" class="me-2">
        <div>E-Berpadu</div>
      </a>
    </li>
    @auth
      @if (auth()->user()->role == 'Master Admin')
        <li class="menu-item {{ $title === 'Data Pengguna' ? 'active open' : '' }}">
          <a href="/user-table" class="menu-link">
            <i class="menu-icon tf-icons bx bx-table"></i>
            <div>Database Pengguna</div>
          </a>
        </li>
      @endif
    @endauth
    <li class="menu-item">
      <a href="#" class="menu-link">
        <div class="mb-5"></div>
      </a>
    </li>
  </ul>
</aside>
<!-- / Menu -->
