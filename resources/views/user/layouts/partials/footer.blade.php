<div>
  <footer>
      <footer class="footer">
        <div class="container">
          <div class="row">
            <div class="footer-col">
              <img src="{{ $pengaturan->gambar() }}" alt="{{ $pengaturan->nama }}" width="200">
            </div>
            <div class="footer-col">
              <h4>Informasi</h4>
              <ul>
                <li><a href="{{ route('desa.index') }}">Beranda</a></li>
                <li><a href="{{ route('desa.index') }}">Desa</a></li>
                <li><a href="{{ route('proyek.index') }}">Proyek</a></li>
                <li><a href="{{ route('tentang') }}">Tentang kami</a></li>
                <li><a href="{{ route('kontak') }}">Kontak</a></li>
              </ul>
            </div>
            <div class="footer-col">
              <h4>Kontak</h4>
              <ul>
                <li><a href=""><i class="bi bi-map"></i> {{ $pengaturan->alamat }}</a></li>
                {{-- <li><a href=""><i class="bi bi-phone"></i> {{ $pengaturan->no_telepon }}</a></li> --}}
                <li><a href=""><i class="bi bi-mailbox"></i> {{ $pengaturan->email }}</a></li>
              </ul>
            </div>
            <div class="footer-col">
              <h4>Media Sosial</h4>
              <div class="social-links">
                <a href="{{ $pengaturan->link_facebook }}" target="_blank"><i class="bi bi-facebook"></i></a>
                <a href="{{ $pengaturan->link_twitter }}" target="_blank"><i class="bi bi-twitter"></i></a>
                <a href="{{ $pengaturan->link_linkedin }}" target="_blank"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      </footer>
  </footer>
</div>