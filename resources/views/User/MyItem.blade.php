@extends('layouts.base')

@section('title', 'My Items')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/summernote/dist/summernote-bs4.min.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>My Items</h1>
            </div>
            <div class="">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-danger">Data Item</h4>
                        <div class="card-header-action">
                            <a href="{{ route('user.create.myItem') }}" class="btn btn-primary mr-2">Add Item</a>
                        </div>

                        <!-- Search -->
                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 250px;">
                                <form action="{{ route('user.search.myItem') }}" method="get">
                                    <div class="input-group">
                                        <input type="search" name="search" class="form-control float-right"
                                            placeholder="Search">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>

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

                            <table class="table-striped mb-0 table">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Item</th>
                                        <th>Image</th>
                                        <th>Lokasi</th>
                                        <th>Tanggal input</th>
                                        <th>Catatan Tambahan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($items as $row)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $row->nama_item }}</td>
                                            <td>
                                                <img src="{{ url('img') . '/' . $row->image }}" class=""
                                                    width="80px" height="80px" alt="{{ $row->nama_item }}">
                                            </td>
                                            <td>{{ $row->lokasi }}</td>
                                            <td>{{ $row->created_at }}</td>
                                            <td>{{ strip_tags($row->catatan_tambahan) }} </td>
                                            <td>
                                                <!-- Delete -->
                                                <form action="{{ route('user.delete.myItem') }}" method="post" onsubmit="return confirm('Apakah Anda yakin ingin menghapus item ini?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="hidden" name="id" value="{{ $row->id }}">
                                                    <button type="submit" class="btn btn-danger btn-action" title="delete">
                                                        <i class="fas fa-trash"></i></button>
                                                </form>
                                                <!-- End Delete -->
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
