@extends('layouts.auth')

@section('title', 'Register')

@push('style')
<!-- CSS Libraries -->
<link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
<div class="card border rounded-1 bg-white shadow p-2 mx-2">
    <div class="card-header mb-6 d-flex align-items-center justify-content-center">
        <img src="{{ asset('img/BB.png') }}" alt="BB Logo" class="img-fluid mb-2" width="40px">
        <span class="p-1"><h3 class="text-danger">BarterBox</h3></span>
    </div>

    <div class="card-body">
        <div class="mb-4">
            <h5>Register</h5>
        </div>
        <form method="POST" action="{{ route('register') }}">
        @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input id="name" type="text" class="form-control" @error('name') is-invalid @enderror required name="name" autofocus>
                @error('name')
                <div id="name" class="form-text error invalid-feedback" role="alert">
                    
                </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="email" class="form-control" @error('email') is-invalid @enderror required name="email">
                @error('email')
                <div id="email" class="form-text error invalid-feedback" role="alert">
                    {{ $msg }}
                </div>
                @enderror
                <div class="invalid-feedback">
                </div>
            </div>

            <div class="form-group">
                <label for="password" class="d-block">Password</label>
                <input id="password" type="password" class="form-control pwstrength" @error('password') is-invalid @enderror required data-indicator="pwindicator" name="password">
                @error('password')
                <div id="password" class="form-text error invalid-feedback" role="alert">
                    {{ $msg }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="password_confirmation" class="d-block">Password Confirmation</label>
                <input id="password_confirmation" type="password" class="form-control" @error('password_confirmation') is-invalid @enderror required name="password_confirmation">
                @error('password_confirmation')
                <div id="password_confirmation" class="form-text error invalid-feedback" role="alert">
                    {{ $msg }}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-danger btn-lg btn-block">
                    Register
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

@push('scripts')
<!-- JS Libraies -->
<script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>
<script src="{{ asset('library/jquery.pwstrength/jquery.pwstrength.min.js') }}"></script>

<!-- Page Specific JS File -->
<script src="{{ asset('js/page/auth-register.js') }}"></script>
@endpush