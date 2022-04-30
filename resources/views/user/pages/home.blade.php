@extends('user.layouts.app')
@section('content')
    <!-- Hero Section -->
    <section id="hero">
        <div class="container h-100">
            <div class="row h-100">

                <div class="col-4 col-lg-2">
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" class="icon" type="submit"><i
                                class="bi bi-search"></i></button>
                    </form>
                    <br><br><br><br><br><br>
                    <div class="titlepage">
                        <h1>PROJEK</h1>
                        <h1 class="fw-bold">{{ $proyek_terakhir->nama }}</h1>
                        <a href="{{ route('proyek.show', $proyek_terakhir->id) }}">
                            <h5>Lihat Projek</h5>
                        </a>

                    </div>
                    <div class="col-4 col-lg-2">
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="prev">
                            <span class="btn btn-outline-dark" class="icon"><i
                                    class="bi bi-arrow-left"></i></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="next">
                            <span class="btn btn-outline-dark" class="icon"><i
                                    class="bi bi-arrow-right"></i></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <!-- <buttons class="btn btn-outline-dark mx-2" class="icon" type="submit"><i class="bi bi-arrow-right"></i></buttons> -->
                </div>
                <div class="col-md-8 my-auto" style="margin-left=10%">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($proyek_terakhir->galeri as $galeri)
                                <div class="carousel-item @if ($galeri->id == $galeri->latest()->first()->id) active @endif"
                                    style="margin-left: 30%;">
                                    <img src="{{ $galeri->gambar() }}" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        {{ $galeri->nama }}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <br><hr> -->

    <section id="card" style="margin-left:10%; margin-top: 5%;" class="mb-3">
        <div class="card mb-1" style="max-width: 1080px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ asset('frontend/img/Cuplikan layar 2022-03-09 122313.png') }}"
                        class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h3 class="card-title">Tentang</h3>
                        <p class="card-text">
                            “{{ $pengaturan->nama }}” {{ Str::limit($pengaturan->deskripsi,120) }}</p>
                        <p class="card-text"><small class="text-muted"><a href="{{ route('tentang') }}" class="text-decoration-none text-muted">Read more...</a></small></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="fk mt-4">Fokus Utama/Pernyataan Misi</div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="d-flex justify-content-between">
                    <div class="fkd font-weight-bold text-center m-0">1</div>
                    <p class="small mt-4">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore nostrum sapiente, modi sint
                        inventore aut dolorem pariatur atque dignissimos quis asperiores, temporibus obcaecati deleniti
                        maxime magni perspiciatis quam esse! Repellendus!
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex justify-content-between">
                    <div class="fkd font-weight-bold text-center m-0">2</div>
                    <p class="small mt-4">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore nostrum sapiente, modi sint
                        inventore aut dolorem pariatur atque dignissimos quis asperiores, temporibus obcaecati deleniti
                        maxime magni perspiciatis quam esse! Repellendus!
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="fk mb-3">Project Kami</div>
            </div>
        </div>
        <div class="row">
            @foreach ($proyek_random as $random)
                <div class="col-md-6 mb-3">
                    <div style="background-image: url({{ $random->gambar() }});">
                        <div class="" style="padding:150px 10px">
                            <h4 class="text-light text-center" style="font-size:40px">{{ $random->nama }}</h4>
                            <div class="text-center">
                                <a href="{{ route('proyek.show', $random->id) }}"
                                    class="text-center text-white text-decoration-none">Lihat Lebih</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row justify-content-end mt-3 mb-3">
            <div class="col-md-2">
                <div class="">
                    <a href="{{ route('proyek.index') }}" class="btn btn-secondary bg-dark">Semua Projek</a>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('styles')
    <style>
        .fk {
            font-size: 30px;
            font-weight: 200;
        }

        .fkd {
            font-size: 88px;
            color: beige
        }

    </style>
@endpush
