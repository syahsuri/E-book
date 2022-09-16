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

      {{-- User --}}
      <li class="menu-item {{ Request::is('dashboard/user*') ? 'active open' : '' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="fa-duotone fa-user me-3"></i>
          <div data-i18n="Layouts">User</div>
        </a>

        <ul class="menu-sub">
          <li class="menu-item {{ Request::is('dashboard/user/list-user*') ? 'active' : '' }}">
            <a href="/dashboard/user/list-user" class="menu-link">
              <div data-i18n="user">List User</div>
            </a>
          </li>
        </ul>
      </li>

      {{-- Progress --}}
      <li class="menu-item {{ Request::is('dashboard/progress*') ? 'active open' : '' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="fa-duotone fa-user me-3"></i>
          <div data-i18n="progress">Progress</div>
        </a>

        <ul class="menu-sub">
          <li class="menu-item {{ Request::is('dashboard/progress/materi-1*') ? 'active' : '' }}">
            <a href="/dashboard/progress/materi-1" class="menu-link">
              <div data-i18n="materi1">Materi 1</div>
            </a>
          </li>
        </ul>
        <ul class="menu-sub">
          <li class="menu-item {{ Request::is('dashboard/progress/materi-2*') ? 'active' : '' }}">
            <a href="/dashboard/progress/materi-2" class="menu-link">
              <div data-i18n="materi2">Materi 2</div>
            </a>
          </li>
        </ul>
      </li>
  </ul>
</aside>
