@extends('Front.front_base')

@section('title', 'welcome')

@section('content')

    {{-- welcome --}}
        
    <section class="welcome d-flex align-items-center mx-auto my-5smooth-link">
        <div class="container py-4">
            <div class="row">
                <div class="hero-content col-md-6">
                    <div class="mt-2">
                        <small class="text-secondary">Welcome to,</small>
                        <h2 class="orange" style="font-weight: bold">Barter Box</h2>
                        <h5 class="orange" style="font-style: italic"> Where Value Meets Exchange!</h5>
                        <br>
                        <p class="text-secondary">Punya barang yang tidak terpakai atau keterampilan yang ingin dibagikan? Barter Box memudahkan
                            kamu untuk bertukar dan terhubung dengan orang-orang yang siap bertransaksi. Jangan sampai
                            ketinggalan, mari bergabung dengan komunitas barter kami!</p>
                        <br>
                        <a  href="{{ route('about') }}" class="start orange p-1">Mulai sekarang >></a>
                    </div>
                </div>
                <div class="hero col-md-6">
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('barterPage/images/shakehand.png')}}" alt="" class="img-fluid"
                            width="300px">
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End Welcome --}}

@endsection
