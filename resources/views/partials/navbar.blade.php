<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="/">
            <span class="align-middle">PTSP</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Halaman
            </li>

            <li class="sidebar-item {{ ($title==='Dashboard') ? 'active' : '' }}">
                <a class="sidebar-link" href="/">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item {{ ($title==='Bagian Perdata') ? 'active' : '' }}">
                <a class="sidebar-link" href="/bagian-perdata">
                    <i class="align-middle" data-feather="clipboard"></i> <span class="align-middle">Bagian Perdata</span>
                </a>
            </li>

            <li class="sidebar-item {{ ($title==='Bagian Pidana') ? 'active' : '' }}">
                <a class="sidebar-link" href="/bagian-pidana">
                    <i class="align-middle" data-feather="briefcase"></i> <span class="align-middle">Bagian Pidana</span>
                </a>
            </li>

            <li class="sidebar-item {{ ($title==='Bagian Hukum') ? 'active' : '' }}">
                <a class="sidebar-link" href="/bagian-hukum">
                    <i class="align-middle" data-feather="book"></i> <span class="align-middle">Bagian Hukum</span>
                </a>
            </li>

            <li class="sidebar-item {{ ($title==='Bagian Umum dan Keuangan') ? 'active' : '' }}">
                <a class="sidebar-link" href="/bagian-umum">
                    <i class="align-middle" data-feather="dollar-sign"></i> <span class="align-middle">Bagian Umum dan Keuangan</span>
                </a>
            </li>

            <li class="sidebar-item {{ ($title==='Posbakum') ? 'active' : '' }}">
                <a class="sidebar-link" href="/posbakum">
                    <i class="align-middle" data-feather="umbrella"></i> <span class="align-middle">Posbakum</span>
                </a>
            </li>
    </div>
</nav>