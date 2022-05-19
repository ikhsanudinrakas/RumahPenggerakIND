@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    <h6>Detail {{ $item->nama }}</h6>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <tr>
                            <th>Nama Desa</th>
                            <td> : </td>
                            <td>{{ $item->nama }}</td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td> : </td>
                            <td>{{ $item->alamat }}</td>
                        </tr>
                        <tr>
                            <th>Potensi</th>
                            <td> : </td>
                            <td>
                                @foreach ($item->potensi as $potensi)
                                <span class="badge @if($potensi->id % 2 == 1 ) badge-secondary @else badge-info @endif">{{ $potensi->nama }}</span>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>Deskripsi Singkat</th>
                            <td> : </td>
                            <td>{{ $item->deskripsi_singkat }}</td>
                        </tr>
                        <tr>
                            <th>Aksi</th>
                            <td> : </td>
                            <td>
                                <a href="{{ route('admin.desa.edit',$item->id) }}" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                                <form action="{{ route('admin.desa.destroy',$item->id) }}" method="post" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin?')"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">
                    <h6>
                        Deskripsi
                    </h6>
                </div>
                <div class="card-body">
                    <p>
                        {!! $item->deskripsi !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('styles')
<!-- Toastr -->
<link rel="stylesheet" href="{{ asset('assets/plugins/toastr/toastr.min.css') }}">
@endpush
@push('scripts')
<script src="{{ asset('assets/plugins/toastr/toastr.min.js') }}"></script>
@include('admin.layouts.partials.toast')
@endpush