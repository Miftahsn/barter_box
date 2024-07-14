@extends('layouts.auth')

@section('title', 'Login')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/bootstrap-social/bootstrap-social.css') }}">
@endpush

@section('main')
    <div class="card border rounded-1 bg-white shadow p-2 mx-2">
        <div class="card-header mb-6 d-flex align-items-center justify-content-center">
            <img src="{{ asset('img/BB.png') }}" alt="BB Logo" class="img-fluid mb-2" width="40px">
            <span class="p-1"><h3 class="text-danger">BarterBox</h3></span>
        </div>

        <div class="card-body">
            <div class="mb-4">
                <h5>Login</h5>
            </div>
            <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" title="email" name="email" tabindex="1"
                        required>
                    <div class="invalid-feedback">
                        Please fill in your email
                    </div>
                </div>

                <div class="form-group">
                    <div class="">
                        <label for="password" class="control-label">Password</label>

                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                    <div class="invalid-feedback">
                        please fill in your password
                    </div>
                    <div class="form-group">
                        <div class="d-block">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="remember" class="custom-control-input" tabindex="3"
                                    id="remember-me">
                                <label class="custom-control-label" for="remember-me"><small>Remember Me</small></label>
                                <div class="float-right">
                                    @if (Route::has('password.request'))
                                        <a class="text-small text-danger" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-danger btn-lg btn-block" tabindex="4">
                        Login
                    </button>
                </div>
            </form>

            <div class="text-muted mt-5 text-center">
                Don't have an account? <a href="{{ route('register') }}" class="text-danger">Sign Up</a>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush
