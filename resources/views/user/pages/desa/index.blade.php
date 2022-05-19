@extends('user.layouts.app')
@section('content')
    <!-- Hero Section -->
    <div class="titlepage" style="margin-left: 10%;">
        <h1 class="fw-light">Daftar</h1>
        <h1 class="fw-bold">Desa</h1>
    </div>

    <form class="d-flex mb-2" action="{{ route('desa.search') }}">
        <input class="form-control me-2" type="search" placeholder="Cari Desa" aria-label="Search"
            style="width:15%;margin-left:80%" name="q" value="{{ $q ?? '' }}">
        <button class="btn btn-outline-success" class="icon" type="submit"><i class="bi bi-search"></i></button>
    </form>

    <section class="listdesa">
        <table class="table table-striped" style="width: 100%;">
            @foreach ($data_desa as $desa)
                <tr>
                    <th scope="row" style="font-size:36px; padding-top:3%; padding-left:1%">{{ $loop->iteration }}</th>
                    <td style="padding-top: 1.5%;"><img src="{{ $desa->gambar() }}" class="gambarlistdesa"
                            alt="{{ $desa->nama }}" style="max-width: 200px; border-radius:2%"></td>
                    <td>
                        <p
                            style="font-weight: 350; font-size: 25px; font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">
                            {{ $desa->nama }} <br>
                            Potensi : @foreach ($desa->potensi as $potensi)
                                {{ $potensi->nama }}
                        </p>
            @endforeach
            <p
                style="font-size: 16px; font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">
                {{ $desa->deskripsi_singkat }}
                <a href="{{ route('desa.show', $desa->id) }}" class="text-decoration-none">Read More...</a>
            </p>
            </td>
            </tr>
            @endforeach
        </table>
        @if($data_desa->isEmpty())
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="alert alert-danger">
                        <p class="text-center">Desa Tidak Ditemukan!</p>
                    </div>
                </div>
            </div>
        @endif
        {{ $data_desa->withQueryString()->links() }}
    </section>
@endsection
