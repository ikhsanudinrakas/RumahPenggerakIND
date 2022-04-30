@extends('auth.layouts.app')
@section('title','Login')
@section('content')
<!-- Modal -->
<div class="modal fade" id="modalLogin" tabindex="-1" aria-labelledby="modalLoginLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="modalLoginLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('login') }}" method="post">
          @csrf
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control @error('username') is-invalid @enderror" placeholder="Masukan Username" name="username" value="{{ old('username') }}">
              @error('username')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
              @enderror
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Masukan Password" name="password" value="{{ old('password') }}">
            @error('password')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-group">
            <div class="icheck-primary">
              <input type="checkbox" id="remember" name="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </div>
      </form>
      <p>Belum punya akun? <a href="{{ route('register') }}">Register</a></p>
      </div>
    </div>
  </div>
</div>
@endsection
@push('styles')
{{-- <link rel="stylesheet" href="{{ asset('frontend/css/login.css') }}"> --}}
@endpush
@push('scripts')
    <script>
      $(function(){
        var url = '{{ url('') }}';
        $('#modalLogin').modal({backdrop: 'static', keyboard: false},'show');
        $('#modalLogin').on('hidden.bs.modal', function(){
          window.location.href = url;
        })
      })
    </script>
@endpush
