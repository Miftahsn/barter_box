@extends('layouts.base')

@section('title', 'Form Input Item')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/summernote/dist/summernote-bs4.min.css') }}">
    <link rel="stylesheet" href="assets/modules/summernote/summernote-bs4.css">
    <link rel="stylesheet" href="assets/modules/codemirror/lib/codemirror.css">
    <link rel="stylesheet" href="assets/modules/codemirror/theme/duotone-dark.css">
    <link rel="stylesheet" href="assets/modules/jquery-selectric/selectric.css">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Add Status</h1>
            </div>
            <div class="card">
                <form action="{{ route('user.add.store.item', 'id') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-header">
                        <h4 class="text-danger">Add Status Item</h4>
                    </div>
                    <div class="card-body">
                        <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                        <div class="form-group">
                            <label>Nama Item</label>
                            <input type="text" id="nama_item" name="nama_item" required class="form-control" disabled>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" id="image" name="image" required class="form-control" disabled>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Status Item</label>
                            <div class="selectgroup w-100">
                                <label class="selectgroup-item">
                                    <input type="radio" name="status" value="done" class="selectgroup-input" required
                                        checked="">
                                    <span class="selectgroup-button">Sukses Tukar</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="radio" name="status" value="unDone" class="selectgroup-input" required
                                        checked="">
                                    <span class="selectgroup-button btn-danger">Belum ditukar</span>
                                </label>
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                </form>
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
    <script src="assets/modules/summernote/summernote-bs4.js"></script>
    <script src="assets/modules/codemirror/lib/codemirror.js"></script>
    <script src="assets/modules/codemirror/mode/javascript/javascript.js"></script>
    <script src="assets/modules/jquery-selectric/jquery.selectric.min.js"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/index-0.js') }}"></script>
@endpush
