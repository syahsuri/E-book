<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="app-brand">
    <a class="navbar-brand fs-5 fw-bold" href="/">
      <span class="merek">TANYO</span> MERUNOE
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">
    {{-- Dashboard --}}
    <li class="menu-item {{ Request::is('dashboard') ? 'active' : '' }}">
      <a href="/dashboard" class="menu-link">
        <i class="fa-duotone fa-grid-2 me-3"></i>
        <div data-i18n="Analytics">Dashboard</div>
      </a>
    </li>

      {{-- Mahasiswa --}}
      <li class="menu-item {{ Request::is('dashboard/mahasiswa*') ? 'active open' : '' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="fa-duotone fa-user me-3"></i>
          <div data-i18n="Layouts">Mahasiswa</div>
        </a>

        <ul class="menu-sub">
          <li class="menu-item {{ Request::is('dashboard/mahasiswa/list-mahasiswa*') ? 'active' : '' }}">
            <a href="/dashboard/mahasiswa/list-mahasiswa" class="menu-link">
              <div data-i18n="solusi">List Mahasiswa</div>
            </a>
          </li>
        </ul>
        <ul class="menu-sub">
          <li class="menu-item {{ Request::is('dashboard/mahasiswa/progress-mahasiswa*') ? 'active' : '' }}">
            <a href="/dashboard/mahasiswa/progress-mahasiswa" class="menu-link">
              <div data-i18n="solusi">Progres Mahasiswa</div>
            </a>
          </li>
        </ul>
      </li>
  </ul>
</aside>
