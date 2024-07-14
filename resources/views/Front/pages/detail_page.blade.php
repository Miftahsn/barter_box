@extends('layouts.base')

@section('title', 'My Items')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/summernote/dist/summernote-bs4.min.css') }}">
@endpush

@section('main')
    <div class="d-flex justify-content-center align-items-center my-5">
        @foreach ($items as $row)
            <div class="row border rounded-1 p-3 bg-white shadow box-area">
                <div class="col-md-6 d-flex justify-content-center align-items-center flex-column left-box"
                    style="background: white">
                    <div class="featured-image">
                        <img src="{{ url('img') . '/' . $row->image }}" class="img-fluid" style="width: 400px"
                            alt="{{ $items->image }}" />
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="row align-items-center">

                        <div class="p-4 mb-4">
                            <h2 class="orange">Item Detail</h2>
                            <br>

                            <p>
                                {{ $items->nama_item }}
                            </p>
                            <p>{{ strip_tags($items->catatan_tambahan) }}</p>
                            <br>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="address">
                                    <p class="orange nav-link p-1" style="font-size: 14px">{{ $items->nama_item }}</p>
                                    <small class="text-secondary">Semarang</small>
                                </div>
                                <div class="button">
                                    <button type="button" data-toggle="modal" data-target="#modalChatt"
                                        class="btn btn-danger btn-red text-white m-1">Chatt</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <!-- Modal -->
        <div class="modal fade" id="modalChatt" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title orange" id="exampleModalLabel">Message</h5>
                        <button type="button" class="btn btn-default" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                            Tidak dapat mengoperasikan pada platform ini, unduh aplikasi untuk pengalaman yang kebih
                            baik
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-red btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
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
