@extends('Front.front_base')

@section('title', 'about')

@section('content')

    {{-- About --}}
    <section class="container mx-auto my-5 smooth-link">
        <h2 class="orange py-2 fw-semibold">Tentang Barter Box</h2>
        <div class="about my-4">
            <p>
                Barter Box adalah platform revolusioner yang memungkinkan kamu menukar barang dan jasa tanpa perlu uang
                tunai. Di sini, setiap pertukaran adalah peluang untuk berhemat, mengurangi limbah, dan membangun hubungan
                yang lebih kuat dalam komunitas kamu. Temukan kesenangan dalam barter, dari menukar barang sehari-hari
                hingga keterampilan unik. Bergabunglah dengan kami dan jadilah bagian dari gerakan menuju ekonomi yang lebih
                berkelanjutan dan saling mendukung!
            </p>
        </div>
    </section>
    <section class="container mx-auto my-5 pt-4 smooth-link">
        <div class="benefit my-6">
            <h4 class="orange text-center" style="font-style: italic">Mengapa Barter Box?</h4>
            <div class="row">
                <div class="col-md-4 d-flex justify-content-center ">
                    <div class="card card-about p-4 my-4">
                        <p>
                            Hemat Uang:
                            <small class="text-secondary">Tukar barang yang tidak lagi kamu butuhkan dengan yang kamu
                                perlukan.</small>
                        </p>
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-center ">
                    <div class="card card-about p-4 my-4">
                        <p>
                            Hidup Berkelanjutan:
                            <small class="text-secondary">Kurangi limbah dengan memberikan barang kehidupan baru</small>
                        </p>
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-center ">
                    <div class="card card-about p-4 my-4">
                        <p>
                            Koneksi Komunitas:
                            <small class="text-secondary">Bangun hubungan dan dukung komunitas lokal kamu</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End About --}}

@endsection
