<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container-fluid">
        <nav class="navbar bg-white">
            <div class="container">
              <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('frontend/img/logo.png') }}" alt="logo image" width="250">
              </a>
            </div>
          </nav>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent" >
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0" >
          <li class="nav-item mx-2">
            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">BERANDA</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="{{ route('desa.index') }}">DESA</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="{{ route('proyek.index') }}">PROJEK</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="{{ route('tentang') }}">TENTANG KAMI</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="{{ route('kontak') }}">KONTAK</a>
          </li>
          @auth
          <li class="nav-item">
            <a href="{{ route('logout') }}" title="Logout" class="nav-link" onclick="event.preventDefault();
            document.getElementById('formLogout').submit();">
              LOGOUT
            </a>
            <form action="{{ route('logout') }}" method="post" id="formLogout">
              @csrf
            </form>
          </li>
          @endauth
          <li class="nav-item mx-2">
            <a class="nav-link" href="{{ route('login') }}"><i class="bi bi-person"></i></a>
          </li>
        </ul>
      </div>
    </div>
</nav>
