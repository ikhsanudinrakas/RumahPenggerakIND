@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h6 class="text-center">Tambah Desa</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.desa.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama Desa</label>
                            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" value="{{old('nama') }}">
                            @error('nama')
                                <div class="is-invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" id="alamat" cols="30" rows="4" class="form-control">{{ old('alamat') }}</textarea>
                            @error('alamat')
                                <div class="is-invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="potensi">Potensi</label>
                            <select name="potensi[]" id="potensi" class="form-control select2" multiple>
                                @foreach ($potensi as $pot)
                                <option value="{{ $pot->id }}">{{ $pot->nama }}</option>
                                @endforeach
                            </select>
                            @error('potensi')
                                <div class="is-invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="deskripsi_singkat">Deskripsi Singkat</label>
                            <textarea name="deskripsi_singkat" id="deskripsi_singkat" cols="30" rows="4" class="form-control">{{ old('deskripsi_singkat') }}</textarea>
                            @error('deskripsi_singkat')
                                <div class="is-invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" class="form-control summernote">{{ old('deskripsi') }}</textarea>
                            @error('deskripsi')
                                <div class="is-invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <input type="file" name="gambar" class="form-control @error('gambar') is-invalid @enderror" id="gambar">
                            @error('gambar')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group d-flex justify-content-between">
                            <a href="{{ route('admin.desa.index') }}" class="btn btn-warning">Batal</a>
                            <button class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('styles')
<link rel="stylesheet" href="{{ asset('assets/plugins/summernote/summernote-bs4.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
@endpush
@push('scripts')
<script src="{{ asset('assets/plugins/summernote/summernote.min.js') }}"></script>
<script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>
<script>
    $(function(){
        $('.summernote').summernote({
            height:300
        });
        $('.select2').select2({
            placeholder: 'Pilih Potensi'
        });
    })
</script>
@endpush