@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h6>Tambah Galeri</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.galeri.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <select name="kategori" id="kategori" class="form-control">
                                <option value="">-- Pilih Kategori --</option>
                                <option value="kdesa">Desa</option>
                                <option value="kproyek">Proyek</option>
                                <option value="kpotensidesa">Potensi Desa</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="nama" class="form-control @error('gambar') is-invalid @enderror" name="nama">
                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group fgdesa d-none">
                            <label for="desa">Desa</label>
                            <select name="desa" id="desa" class="form-control">
                                <option value="">-- Pilih Desa --</option>
                                @foreach ($data_desa as $desa)
                                    <option value="{{ $desa->id }}">{{ $desa->nama }}</option>
                                @endforeach
                            </select>
                            @error('desa')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group fgpotensidesa d-none">
                            <label for="potensidesa">Potensi</label>
                            <select name="potensidesa" id="potensidesa" class="form-control">
                                
                            </select>
                            @error('desa')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group fgproyek d-none">
                            <label for="proyek">Proyek</label>
                            <select name="proyek" id="proyek" class="form-control">
                                <option value="">-- Pilih Proyek --</option>
                                @foreach ($data_proyek as $proyek)
                                    <option value="{{ $proyek->id }}">{{ $proyek->nama }}</option>
                                @endforeach
                            </select>
                            @error('proyek')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <input type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar[]" multiple>
                            @error('gambar')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary float-right">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
    $(function(){
        $('#kategori').on('change', function(){
            var kategori = $(this).val();
            if(kategori === 'kproyek')
            {
                $('.fgproyek').removeClass('d-none');
                $('.fgdesa').addClass('d-none'); 
                $('.fgpotensidesa').addClass('d-none');
            }else if(kategori === 'kdesa')
            {
                $('.fgproyek').addClass('d-none');  
                $('.fgdesa').removeClass('d-none');   
                $('.fgpotensidesa').addClass('d-none');
            }else if(kategori === 'kpotensidesa')
            {
                $('#desa').on('change', function(){
                    var desa_id = $(this).val();
                    $.ajax({
                        url: '{{ url('admin/potensi') }}' + '/' + desa_id + '/desa',
                        type: 'GET',
                        dataType: 'JSON',
                        success: function(response){
                            $('#potensidesa').empty();
                            $('#potensidesa').append('<option selected disabled>-- Pilih Potensi --</option>');
                            $.each(response,function(key,val){
                                    $('#potensidesa').append('<option value="'+val['id']+'">'+val['nama']+'</option>')
                            });
                        }
                    })
                })
                
                $('.fgpotensidesa').removeClass('d-none');
                $('.fgdesa').removeClass('d-none');
                $('.fgproyek').addClass('d-none');  
            }
        });
    })
</script>
@endpush