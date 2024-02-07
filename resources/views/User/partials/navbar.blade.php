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

    <!-- Posbakum -->
    <li class="menu-item">
      <a href="/chat-room" class="menu-link">
        <i class="menu-icon tf-icons bx bx-chat"></i>
        <div>PTSP Chat Room</div>
      </a>
    </li>

  </ul>
</aside>
<!-- / Menu -->
