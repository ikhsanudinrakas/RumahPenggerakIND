@extends('user.layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="titlepage" style="margin-left: 10%; margin-right: 10%;">
                <br><br>
                <h1 class="fw-light">Proyek</h1>
                <h1 class="fw-bold">{{ $proyek->nama }}</h1>
              </div>
        
            <img src="{{ $proyek->gambar() }}" alt="" style="margin-left: 10%; width: 80%;" >  
        
            <div class="container" style="margin: 10%;">
                <div class="row row-cols-2">
                  <div class="col"><img src="{{ $proyek->gambar() }}" alt="" style="width: 80%;" class="mb-3"></div>
                  <div class="col">
                      {!! $proyek->deskripsi !!}
                  </div>
                  {{-- galeri proyek --}}
                  @foreach ($proyek->galeri as $galeri)
                  <div class="col mb-2">
                    <img src="{{ $galeri->gambar() }}" alt="" style="width: 80%; position: relative;">
                  </div>
                  @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection