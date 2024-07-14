@extends('Front.front_base')

@section('title', 'items-page')

@section('content')

    {{-- up--}}
    <section class="container mx-auto my-4 smooth-link">
        <div class="d-flex justify-content-between">
            <div class="">
                <h3 class="orange" style="font-weight: 600">Items</h3>
            </div>
            <div class="card-tools d-flex justify-content-between">
                <div class="input-group input-group-sm d-flex justify-content-between" style="width: 250px;">
                    <form action="{{ route('search.front') }}" method="get">
                        <div class="input-group-append d-flex">
                            <input type="search" name="search" value="{{ request()->search }}"
                                class="form-control float-right" placeholder="Search">
                            <button type="submit" class="btn btn-default">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <hr>
    </section>
    {{-- up --}}

    {{-- Items --}}
    <section id="items" class="container mx-auto my-4 pb-4">
        <div class="row">
            @foreach ($items as $row)
                <div class="col-md-3 col-sm-6">
                    <a href="{{ url('https://whatsform.com/lllnvk') }}" target="_blank">
                        <div class="card card-items rounded mx-2 my-3">
                            <img src="{{ url('img') . '/' . $row->image }}" alt="" class="img-fluid item-image"
                                width="200px" height="200px">
                            <div class="items">
                                <a href="#" class="start orange" style="font-size: 18px">{{ $row->nama_item }}</a>
                                <p><small class="text-secondary">{{ $row->lokasi }}</small></p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </section>
    {{-- End Items --}}

@endsection
