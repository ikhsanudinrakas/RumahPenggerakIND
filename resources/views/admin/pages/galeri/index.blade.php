@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h6>Data Galeri</h6>
                        <a href="{{ route('admin.galeri.create') }}" class="btn btn-sm btn-primary">Tambah Galeri</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach ($items as $item)
                        <div class="col-sm-3">
                            <div class="kotakgambar position-relative mb-3">
                              <a href="{{ $item->gambar() }}" data-toggle="lightbox" data-title="{{ $item->nama }}" data-gallery="gallery">
                                <img src="{{ $item->gambar() }}" class="img-fluid mb-2" alt="{{ $item->nama }}"/>
                              </a>
                              <div class="text-center btnDelete">
                                <form action="{{ route('admin.galeri.destroy',$item->id) }}" method="post" class="d-inline">
                                  @csrf
                                  @method('delete')
                                  <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i>
                                  </button>
                                </form>
                              </div>
                            </div>
                          </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('styles')
    <!-- Ekko Lightbox -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/ekko-lightbox/ekko-lightbox.css') }}">
  <!-- Toastr -->
<link rel="stylesheet" href="{{ asset('assets/plugins/toastr/toastr.min.css') }}">
@endpush
@push('scripts')
<!-- Ekko Lightbox -->
<script src="{{ asset('assets/plugins/ekko-lightbox/ekko-lightbox.min.js') }}"></script>
<!-- Filterizr-->
<script src="{{ asset('assets/plugins/filterizr/jquery.filterizr.min.js') }}"></script>
<script src="{{ asset('assets/plugins/toastr/toastr.min.js') }}"></script>
@include('admin.layouts.partials.toast')
<!-- Page specific script -->
<script>
  $(function () {
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });
  })
</script>
@endpush