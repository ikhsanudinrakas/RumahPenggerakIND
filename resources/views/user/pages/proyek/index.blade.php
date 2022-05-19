@extends('user.layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Content Section -->
                <div class="titlepage" style="margin-left: 10%;">
                    <br><br>
                    <h1 class="fw-light">Proyek</h1>
                    <h1 class="fw-bold">Kami</h1>
                </div>

                <form class="d-flex mb-2" action="{{ route('proyek.search') }}">
                    <input class="form-control me-2" type="search" placeholder="Cari Proyek" aria-label="Search"
                        style="width:15%;margin-left:70%" name="q" value="{{ $q }}">
                    <button class="btn btn-outline-success" class="icon" type="submit"><i
                            class="bi bi-search"></i></button>
                </form>

                <section>
                    @forelse ($data_proyek as $proyek)
                        <div class="card mb-3" style="max-width: 80%; margin-left: 10%;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ $proyek->gambar() }}" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $proyek->nama }}</h5>
                                        <p class="card-text">{{ $proyek->deskripsi_singkat }}</p>
                                        <a href="{{ route('proyek.show', $proyek->id) }}">
                                            <p class="card-text"><small class="text-muted">VIEW MORE</small></p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        @empty
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-danger">
                                    <p class="text-center">Proyek Tidak Ditemukan!</p>
                                </div>
                            </div>
                        </div>
                    @endforelse

                    {{-- <table class="table table-striped" style="width: 100%;">
                @foreach ($data_proyek as $proyek)
                <tr>
                    <th scope="row" style="font-size:36px; padding-top:3%; padding-left:1%">{{ $loop->iteration }}</th>
                    <td style="padding-top: 1.5%;"><img src="{{ $proyek->gambar() }}" class="gambarlistproyek" alt="{{ $proyek->nama }}" style="max-width: 200px; border-radius:2%"></td>
                    <td> <h5 class="card-title">{{ $proyek->nama }}</h5>
                    <p style="font-size: 16px; font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">
                        {{ $proyek->deskripsi_singkat }}
                        <a href="{{ route('proyek.show',$proyek->id) }}" class="text-decoration-none">Read More...</a>
                    </p>
                    </td>
                </tr>
                @endforeach
                </table> --}}








                </section>
                <div class="text-center justify-content-center">
                    {{ $data_proyek->withQueryString()->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
