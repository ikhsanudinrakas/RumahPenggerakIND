@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-md-4">

        <!-- Profile Image -->
        <div class="card card-primary card-outline">
          <div class="card-body box-profile">
            <div class="text-center mb-4">
              <img class="profile-user-img img-fluid img-circle"
                   src="{{ $item->gambar() }}"
                   alt="Foto {{ $item->nama }}">
            </div>

            <ul class="list-group list-group-unbordered mb-3">
              <li class="list-group-item">
                <b>Nama</b> <a class="float-right text-dark small">{{ $item->nama }}</a>
              </li>
              <li class="list-group-item">
                <b>Alamat</b> <a class="float-right text-dark small">{{ $item->alamat }}</a>
              </li>
              <li class="list-group-item">
                <b>No. Telepon</b> <a class="float-right text-dark small">{{ $item->no_telepon }}</a>
              </li>
              <li class="list-group-item">
                <b>Email</b> <a class="float-right text-dark small">{{ $item->email }}</a>
              </li>
              <li class="list-group-item">
                <b>Link Facebook</b> <a class="float-right small text-dark">{{ $item->link_facebook }}</a>
              </li>
              <li class="list-group-item">
                <b>Link Twitter</b> <a class="float-right small text-dark">{{ $item->link_twitter }}</a>
              </li>
              <li class="list-group-item">
                <b>Link Linkedin</b> <a class="float-right small text-dark">{{ $item->linkedin }}</a>
              </li>
              <li class="list-group-item">
                <b>Link Path</b> <a class="float-right small text-dark">{{ $item->link_path }}</a>
              </li>
            </ul>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

        <!-- /.card -->
      </div>
      <!-- /.col -->
      <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h6 class="text-center">Edit Pengaturan</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.pengaturan.update') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" value="{{ $item->nama ?? old('nama') }}">
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" cols="30" rows="5" class="form-control @error('deskripsi') is-invalid @enderror">{{ $item->deskripsi ?? old('deskripsi') }}</textarea>
                        @error('deskripsi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat" cols="30" rows="5" class="form-control @error('alamat') is-invalid @enderror">{{ $item->alamat ?? old('alamat') }}</textarea>
                        @error('alamat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="map">Map</label>
                        <textarea name="map" id="map" cols="30" rows="5" class="form-control @error('map') is-invalid @enderror">{{ $item->map ?? old('map') }}</textarea>
                        @error('map')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ $item->email ?? old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="no_telepon">No. Telepon</label>
                        <input type="text" name="no_telepon" class="form-control @error('no_telepon') is-invalid @enderror" id="no_telepon" value="{{ $item->no_telepon ?? old('no_telepon') }}">
                        @error('no_telepon')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="link_facebook">Link Facebook</label>
                        <input type="text" name="link_facebook" class="form-control @error('link_facebook') is-invalid @enderror" id="link_facebook" value="{{ $item->link_facebook ?? old('link_facebook') }}">
                        @error('link_facebook')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="link_twitter">Link Twitter</label>
                        <input type="text" name="link_twitter" class="form-control @error('link_twitter') is-invalid @enderror" id="link_twitter" value="{{ $item->link_twitter ?? old('link_twitter') }}">
                        @error('link_twitter')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="link_linkedin">Link Linkedin</label>
                        <input type="text" name="link_linkedin" class="form-control @error('link_linkedin') is-invalid @enderror" id="link_linkedin" value="{{ $item->link_linkedin ?? old('link_linkedin') }}">
                        @error('link_linkedin')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="link_path">Link Path</label>
                        <input type="text" name="link_path" class="form-control @error('link_path') is-invalid @enderror" id="link_path" value="{{ $item->link_path ?? old('link_path') }}">
                        @error('link_path')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <input type="file" name="gambar" class="form-control @error('gambar') is-invalid @enderror" id="gambar" value="{{ old('gambar') }}">
                        @error('gambar')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group d-flex justify-content-between">
                        <a href="{{ route('admin.dashboard') }}" class="btn btn-warning">Cancel</a>
                        <button class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
</div>
@endsection
@push('styles')
<!-- Toastr -->
<link rel="stylesheet" href="{{ asset('assets/plugins/toastr/toastr.min.css') }}">
@endpush
@push('scripts')
<script src="{{ asset('assets/plugins/toastr/toastr.min.js') }}"></script>
@include('admin.layouts.partials.toast')
@endpush