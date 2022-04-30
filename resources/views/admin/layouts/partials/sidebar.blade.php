<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link text-center">
      <span class="brand-text font-weight-bold">{{ $pengaturan->nama }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ auth()->user()->avatar() }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ route('admin.profile.show') }}" class="d-block">{{ auth()->user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ route('admin.dashboard') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.desa.index') }}" class="nav-link">
              <i class="nav-icon far fa-folder"></i>
              <p>
                Desa
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.potensi.index') }}" class="nav-link">
              <i class="nav-icon far fa-folder"></i>
              <p>
                Potensi
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.proyek.index') }}" class="nav-link">
              <i class="nav-icon far fa-folder"></i>
              <p>
                Proyek
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.pesan-masuk.index') }}" class="nav-link">
              <i class="nav-icon far fa-folder"></i>
              <p>
                Pesan Masuk
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.galeri.index') }}" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Galeri Foto
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.users.index') }}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                User
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.pengaturan.index') }}" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Pengaturan Web
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('logout') }}" title="Logout" class="nav-link" onclick="event.preventDefault();
            document.getElementById('formLogout').submit();">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
            <form action="{{ route('logout') }}" method="post" id="formLogout">
              @csrf
            </form>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
