@extends('user.layouts.app')
@section('content')
    <!-- Hero Section -->
    <div class="titlepage" style="margin-left: 10%;">
        <h1 class="fw-light">Daftar</h1>
        <h1 class="fw-bold">Desa</h1>
      </div>

      <section class="listdesa">
        <table class="table table-striped" style="width: 80%; margin-left:10%;">
          @foreach ($data_desa as $desa)
          <tr>
            <th scope="row" style="margin-top: 50%;">{{ $loop->iteration }}</th>
            <td><img src="{{ $desa->gambar() }}" class="gambarlistdesa" alt="{{ $desa->nama }}" style="max-width: 200px"></td>
            <td>{{ $desa->nama }}
              Potensi : @foreach ($desa->potensi as $potensi)
                  {{ $potensi->nama }},
              @endforeach
              <p>
                {{ $desa->deskripsi_singkat }}
                <a href="{{ route('desa.show',$desa->id) }}" class="text-decoration-none">Read More...</a>
              </p>
              </td>
          </tr>
          @endforeach
        </table>
        {{ $data_desa->links() }}
      </section>
@endsection
