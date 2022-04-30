@extends('user.layouts.app')
@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="font-weight-light" style="font-weight: 200">PERUSHAAN</h2>
        <h2>PENGENALAN</h2>
      </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="font-weight-bold">{{ $pengaturan->nama }}</div>
            <p>
                {!! $pengaturan->deskripsi !!}
            </p>
            <table class="table mt-4 mb-5">
                <tr>
                    <td>Alamat</td>
                    <td> : </td>
                    <td>{{ $pengaturan->alamat }}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td> : </td>
                    <td>{{ $pengaturan->email }}</td>
                </tr>
                <tr>
                    <td>No. Telepon</td>
                    <td> : </td>
                    <td>{{ $pengaturan->no_telepon }}</td>
                </tr>
                <tr>
                    <td>Facebook</td>
                    <td> : </td>
                    <td>
                        <a href="{{ $pengaturan->link_facebook }}">{{ $pengaturan->link_facebook }}</a>
                    </td>
                </tr>
                <tr>
                    <td>Twitter</td>
                    <td> : </td>
                    <td>
                        <a href="{{ $pengaturan->link_twitter }}">{{ $pengaturan->link_twitter }}</a>
                    </td>
                </tr>
                <tr>
                    <td>Linkedin</td>
                    <td> : </td>
                    <td>
                        <a href="{{ $pengaturan->link_linkedin }}">{{ $pengaturan->link_linkedin }}</a>
                    </td>
                </tr>
                <tr>
                    <td>Pinterest</td>
                    <td> : </td>
                    <td>
                        <a href="{{ $pengaturan->link_path }}">{{ $pengaturan->link_path }}</a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="row justify-content-center mt-4">
        <div class="col-md-3">
            <div class="text-center">
                <img src="{{ asset('assets/dist/img/avatar.png') }}" alt="" class="img-fluid rounded-circle people-image">
                <h1 class="people-name">Deni Sumarto</h1>
                <h2 class="people-position">CEO</h2>
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-12">
            <div class="display-4">Tim</div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="text-center mb-5">
                <img src="{{ asset('assets/dist/img/avatar2.png') }}" alt="" class="img-fluid rounded-circle people-image">
                <h1 class="people-name">Dedi Corbuzer</h1>
                <h2 class="people-position">MANAGER</h2>
            </div>
        </div>
        <div class="col-md-6">
            <div class="text-center mb-5">
                <img src="{{ asset('assets/dist/img/avatar3.png') }}" alt="" class="img-fluid rounded-circle people-image">
                <h1 class="people-name">Dani Isma</h1>
                <h2 class="people-position">STAFF IT</h2>
            </div>
        </div>
        <div class="col-md-6">
            <div class="text-center mb-5">
                <img src="{{ asset('assets/dist/img/avatar2.png') }}" alt="" class="img-fluid rounded-circle people-image">
                <h1 class="people-name">Dedi Corbuzer</h1>
                <h2 class="people-position">MANAGER</h2>
            </div>
        </div>
        <div class="col-md-6">
            <div class="text-center mb-5">
                <img src="{{ asset('assets/dist/img/avatar3.png') }}" alt="" class="img-fluid rounded-circle people-image">
                <h1 class="people-name">Dani Isma</h1>
                <h2 class="people-position">STAFF IT</h2>
            </div>
        </div>
        <div class="col-md-6">
            <div class="text-center mb-5">
                <img src="{{ asset('assets/dist/img/avatar2.png') }}" alt="" class="img-fluid rounded-circle people-image">
                <h1 class="people-name">Dedi Corbuzer</h1>
                <h2 class="people-position">MANAGER</h2>
            </div>
        </div>
        <div class="col-md-6">
            <div class="text-center mb-5">
                <img src="{{ asset('assets/dist/img/avatar3.png') }}" alt="" class="img-fluid rounded-circle people-image">
                <h1 class="people-name">Dani Isma</h1>
                <h2 class="people-position">STAFF IT</h2>
            </div>
        </div>
    </div>
  </div>
@endsection
@push('styles')
<style>
    .people-name{
        font-size: 32px;
        font-weight: 300;
        margin-top: 20px;
        margin-bottom: 10px;
    }
    .people-position{
        font-size: 30px;
        font-weight: 400;
        margin-bottom: 10px;
    }
    .people-image{
        height: 180px;
        width: 180px;
    }
</style>
@endpush
