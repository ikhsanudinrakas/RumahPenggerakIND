@extends('user.layouts.app')
@section('content')
<div class="container">
    <div class="row">
      <div class="col-4">
        <div class="titlepage" style="margin-left: 0%;">
          <br><br>
          <h1 class="fw-light">Kontak</h1>
          <h1 class="fw-bold">Informasi</h1>
        </div>
        <div>
          <br>
          <h6 class="fw-bold">Rumah Penggerak</h6>
          <h6 class="fw-light">{{ $item->alamat }}</h6>
        </div>
        <div>
          <br>
          <h6 class="fw-bold">{{ $item->no_telepon }}</h6> <br>
          <h6 class="fw-light">{{ $item->email }}</h6>
        </div>
        <a href="tentangkami.html" class="btn btn-block btn-secondary">TENTANG KAMI</a>

      </div>
      <div class="col-8">
        <iframe src="{{ $item->map }}" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </div>
  </div>
@endsection