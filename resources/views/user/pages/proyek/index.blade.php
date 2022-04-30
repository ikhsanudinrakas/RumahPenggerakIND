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

            <section>
               @foreach ($data_proyek as $proyek)
               <div class="card mb-3" style="max-width: 80%; margin-left: 10%;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ $proyek->gambar() }}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $proyek->nama }}</h5>
                                <p class="card-text">{{ $proyek->deskripsi_singkat }}</p>
                                <a href="{{ route('proyek.show',$proyek->id) }}"><p class="card-text"><small class="text-muted">VIEW MORE</small></p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
               @endforeach
            </section>
            <div class="text-center justify-content-center">
                {{ $data_proyek->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
