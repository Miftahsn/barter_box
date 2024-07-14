@extends('layouts.base')

@section('title', 'My Profile')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/summernote/dist/summernote-bs4.min.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>My Profile</h1>
            </div>
            <div class="">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-danger">Masukkan No Telp</h4>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <!-- Alert Create-->
                            @if (Session::get('Create'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ Session::get('Create') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            <!-- End Alert -->


                            <!-- Alert Delete -->
                            @if (Session::get('Delete'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ Session::get('Delete') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            <!-- End -->

                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <form action="{{ route('user.update.profile', $profile->id)}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="card-body">
                                                <div class="form-group">

                                                    <label for="name" class="mt-3">Nama Lengkap</label>
                                                    <input type="text" name="name" class="form-control" id="name"
                                                        value="{{ $profile->name}}" disabled>

                                                    <label for="email" class="mt-3">Email</label>
                                                    <input type="email" name="email" class="form-control" id="email"
                                                        value="{{ $profile->email}}" disabled>

                                                    <label for="phone" class="mt-3">No Telpon</label>
                                                    <input type="text" name="phone" class="form-control" id="phone"
                                                        value="{{ $profile->phone}}">

                                                </div>
                                            </div>

                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-danger">Edit Profile</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/simpleweather/jquery.simpleWeather.min.js') }}"></script>
    <script src="{{ asset('library/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('library/jqvmap/dist/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('library/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('library/summernote/dist/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('library/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/index-0.js') }}"></script>
@endpush

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/prismjs/prism.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/bootstrap-modal.js') }}"></script>
@endpush
