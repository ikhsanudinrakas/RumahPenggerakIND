@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h6 class="text-center">Edit Proyek</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.proyek.update',$item->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="form-group">
                            <label for="nama">Nama Proyek</label>
                            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" value="{{ $item->nama ?? old('nama') }}">
                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="desa_id">Nama Desa</label>
                            <select name="desa_id" id="desa_id" class="form-control select2 @error('desa_id') is-invalid @enderror">
                                <option value="" disabled selected>-- Pilih Desa --</option>
                                @foreach ($desa as $ds)
                                    <option @if($ds->id == $item->desa_id) selected @endif value="{{ $ds->id }}">{{ $ds->nama }}</option>
                                @endforeach
                            </select>
                            @error('desa_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="deskripsi_singkat">Deskripsi Singkat</label>
                            <textarea name="deskripsi_singkat" id="deskripsi_singkat" cols="30" rows="4" class="form-control">{{ $item->deskripsi_singkat ?? old('deskripsi_singkat') }}</textarea>
                            @error('deskripsi_singkat')
                                <div class="is-invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" class="form-control summernote">{{ $item->deskripsi ?? old('deskripsi') }}</textarea>
                            @error('deskripsi')
                                <div class="is-invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="gambar">Gambar</label><br>
                                <img src="{{ $item->gambar() }}" alt="" class="img-fluid">
                            </div>
                            <div class="col-9 align-self-center">
                                <input type="file" name="gambar" class="form-control @error('gambar') is-invalid @enderror" id="gambar" value="{{old('gambar') }}">
                                @error('gambar')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group d-flex justify-content-between">
                            <a href="{{ route('admin.proyek.index') }}" class="btn btn-warning">Batal</a>
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
            placeholder: 'Pilih Desa',
            theme: 'bootstrap4'
        });
    })
</script>
@endpush