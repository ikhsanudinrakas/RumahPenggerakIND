@extends('user.layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-12">
                    <div class="slick" data-slick='{"slidesToShow": 1, "slidesToScroll": 1}'>
                        @foreach ($desa->galeri as $galeri)
                            <div>
                                <img src="{{ $galeri->gambar() }}" alt="" class="img-fluid">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5 mb-4">
            <div class="col-md-12">
                <div class="border px-4 py-3">
                    <h5 class="font-weight-light">{{ $desa->nama }}</h5>
                    <h6 class="font-weight-light">{{ $desa->alamat }}</h6>
                    <p class="font-weight-light">Potensi :
                        @foreach ($desa->potensi as $potensi)
                            {{ $potensi->nama }},
                        @endforeach
                    </p>
                    <hr>
                    <p>
                        {{ $desa->deskripsi_singkat }}
                    </p>
                </div>
            </div>
        </div>
        @foreach ($desa->potensi as $potensi)
            <div class="row mt-5 mb-4">
                <div class="col-md-12 mb-3">
                    <div class="bg-dark px-3 py-2 text-white">
                        <h4>{{ $potensi->nama }}</h4>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="slick" data-slick='{"slidesToShow": 4, "slidesToScroll": 4}'>
                        @foreach ($potensi->galeri as $galeri)
                            <div>
                                <img src="{{ $galeri->gambar() }}" alt="" class="img-fluid">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach

        <div style="background-color: #24262b; width:20%; margin-bottom:20px; margin-left:40%">
            <a href="https://forms.gle/WhjPqzmQSm8fR2856" style="
            text-decoration: none; 
            text-align:center; 
            color:#fff; 
            padding: 2px;
            align-items:center;
            font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

            
            "><p>Ajukan Kerjasama</p></a>
        </div>

    </div>
@endsection
@push('styles')
    <link rel="stylesheet" href="{{ asset('frontend/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/slick/slick-theme.css') }}">
@endpush
@push('scripts')
    {{-- <script src="{{ asset('frontend/splide/dist/js/splide.min.js') }}"></script> --}}
    <script type="text/javascript" src="{{ asset('frontend/slick/slick.min.js') }}"></script>
    <script>
        $(function() {
            $('.slick').slick();
        })
    </script>
@endpush
