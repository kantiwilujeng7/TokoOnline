<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
    {{-- <title>{{ $title }}</title> --}}
    <title> Toko Online </title>
</head>

<body>

    <!-- menunya kita taruh persis di bawah <body> -->
    @include('layouts.menu')
    {{-- @include('layouts.isi')
    @include('layouts.kategori') --}}
    <!-- di bawah menu baru kontennya -->
    <!-- Mulai sini kontennya depannya kasih @ sama yield-->
    @yield('content')
    <!-- Sampai sini -->
    @extends('layouts.template')
    @section('content')

        {{-- PRODUCT PAGE --}}

        <div id="produk" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="asset/slide1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="asset/slide2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="asset/slide3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div> <br>

        {{-- CATEGORY PAGE --}}

        <div class="row mt-4" id="kategori">
            <div class="col col-md-12 col-sm-12 mb-4">

                {{-- <div class="container mt-3"> --}}
                <h2 class="text-center">KATEGORI PRODUK</h2> <br>
                {{-- <p>Image at the top (card-img-top):</p> --}}
            </div>

            {{-- <div class="row g-5"> --}}
            <div class="card" style="width:18rem;">
                <img class="card-img-top" src="asset/skincare.PNG" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title"> Skin Care </h4>
                    <p class="card-text">Kami percaya bahwa kulit cantik bisa diraih oleh semua orang. Rangkaian
                        perawatan kulit kami berkualitas dengan hasil teruji, hadir untuk
                        semua jenis kulit dan beragam kebutuhan.
                    </p>
                    <a href="#" class="btn btn-primary">See More</a>
                </div>
            </div>

            <div class="card" style="width:18rem;">
                <img class="card-img-top" src="asset/bodycare.PNG" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title"> Body Care </h4>
                    <p class="card-text">Perawatan tubuh menyeluruh berarti merawat tubuh Anda dari ujung kepala hingga
                        kaki. Kami menawarkan berbagai produk perawatan tubuh harian yang memainkan peranan penting sehingga
                        Anda akan selalu merasa bersih, segar, sehat dan dimanjakan.
                    </p>
                    <a href="#" class="btn btn-primary">See More</a>
                </div>
            </div>

            <div class="card" style="width:18rem;">
                <img class="card-img-top" src="asset/parfume.PNG" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title"> Parfume </h4>
                    <p class="card-text">Parfum atau wewangian dapat membangkitkan gairah, mengembalikan kenangan
                        indah atau membawa Anda ke tempat impian yang jauh. Anda dapat memilih berbagai macam
                        wewangian kami yang terinspirasi dari mimpi-mimpi indah.
                    </p>
                    <a href="#" class="btn btn-primary">See More</a>
                </div>
            </div>

            <div class="card" style="width:18rem;">
                <img class="card-img-top" src="asset/haircare.PNG" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title"> Hair Care </h4>
                    <p class="card-text">Ingin coba tren rambut terbaru atau butuh produk perawatan dan penataan rambut?
                        Kami memiliki rangkaian produk perawatan dan penataan rambut yang lengkap, cobalah dan nikmati
                        hasilnya sesuai dengan kebutuhan Anda.
                    </p>
                    <a href="#" class="btn btn-primary">See More</a>
                </div>
            </div>


            <div class="card" style="width:18rem;">
                <img class="card-img-top" src="asset/makeup.PNG" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title"> Make Up </h4>
                    <p class="card-text">Kami menawarkan pilihan terbaik dari tren kecantikan saat ini
                        lengkap dengan warna-warni yang sesuai dengan kepribadian Anda di setiap suasana.
                        Baik warna dasar klasik ataupun kombinasi warna yang menginspirasi.
                    </p>
                    <a href="#" class="btn btn-primary">See More</a>
                </div>
            </div>
        </div>
        </div>

        <!-- end Kategori Produk -->

        <!-- produk Promo-->
        <div class="row mt-4">
            <div class="col col-md-12 col-sm-12 mb-4">
                <h2 class="text-center">Promo</h2>
            </div>
            <!-- produk pertama -->
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <a href="{{ URL::to('produk/satu') }}">
                        <img src="{{ asset('images/slide3.jpg') }}" alt="foto produk" class="card-img-top">
                    </a>
                    <div class="card-body">
                        <a href="{{ URL::to('produk/satu') }}" class="text-decoration-none">
                            <p class="card-text">
                                Produk Pertama
                            </p>
                        </a>
                        <div class="row mt-4">
                            <div class="col">
                                <button class="btn btn-light">
                                    <i class="far fa-heart"></i>
                                </button>
                            </div>
                            <div class="col-auto">
                                <p>
                                    <del>Rp. 15.000,00</del>
                                    <br />
                                    Rp. 10.000,00
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- produk kedua -->
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <a href="{{ URL::to('produk/dua') }}">
                        <img src="{{ asset('images/slide3.jpg') }}" alt="foto produk" class="card-img-top">
                    </a>
                    <div class="card-body">
                        <a href="{{ URL::to('produk/dua') }}" class="text-decoration-none">
                            <p class="card-text">
                                Produk Kedua
                            </p>
                        </a>
                        <div class="row mt-4">
                            <div class="col">
                                <button class="btn btn-light">
                                    <i class="far fa-heart"></i>
                                </button>
                            </div>
                            <div class="col-auto">
                                <p>
                                    <del>Rp. 15.000,00</del>
                                    <br />
                                    Rp. 10.000,00
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- produk ketiga -->
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <a href="{{ URL::to('produk/tiga') }}">
                        <img src="{{ asset('images/slide3.jpg') }}" alt="foto produk" class="card-img-top">
                    </a>
                    <div class="card-body">
                        <a href="{{ URL::to('produk/tiga') }}" class="text-decoration-none">
                            <p class="card-text">
                                Produk Ketiga
                            </p>
                        </a>
                        <div class="row mt-4">
                            <div class="col">
                                <button class="btn btn-light">
                                    <i class="far fa-heart"></i>
                                </button>
                            </div>
                            <div class="col-auto">
                                <p>
                                    <del>Rp. 15.000,00</del>
                                    <br />
                                    Rp. 10.000,00
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end produk promo -->

        <!-- produk Terbaru-->
        <div class="row mt-4">
            <div class="col col-md-12 col-sm-12 mb-4">
                <h2 class="text-center">Terbaru</h2>
            </div>
            <!-- produk pertama -->
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <a href="{{ URL::to('produk/satu') }}">
                        <img src="{{ asset('images/slide2.jpg') }}" alt="foto produk" class="card-img-top">
                    </a>
                    <div class="card-body">
                        <a href="{{ URL::to('produk/satu') }}" class="text-decoration-none">
                            <p class="card-text">
                                Produk Pertama
                            </p>
                        </a>
                        <div class="row mt-4">
                            <div class="col">
                                <button class="btn btn-light">
                                    <i class="far fa-heart"></i>
                                </button>
                            </div>
                            <div class="col-auto">
                                <p>
                                    Rp. 10.000,00
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- produk kedua -->
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <a href="{{ URL::to('produk/dua') }}">
                        <img src="{{ asset('images/slide2.jpg') }}" alt="foto produk" class="card-img-top">
                    </a>
                    <div class="card-body">
                        <a href="{{ URL::to('produk/dua') }}" class="text-decoration-none">
                            <p class="card-text">
                                Produk Kedua
                            </p>
                        </a>
                        <div class="row mt-4">
                            <div class="col">
                                <button class="btn btn-light">
                                    <i class="far fa-heart"></i>
                                </button>
                            </div>
                            <div class="col-auto">
                                <p>
                                    Rp. 10.000,00
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- produk ketiga -->
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <a href="{{ URL::to('produk/tiga') }}">
                        <img src="{{ asset('images/slide2.jpg') }}" alt="foto produk" class="card-img-top">
                    </a>
                    <div class="card-body">
                        <a href="{{ URL::to('produk/tiga') }}" class="text-decoration-none">
                            <p class="card-text">
                                Produk Ketiga
                            </p>
                        </a>
                        <div class="row mt-4">
                            <div class="col">
                                <button class="btn btn-light">
                                    <i class="far fa-heart"></i>
                                </button>
                            </div>
                            <div class="col-auto">
                                <p>
                                    Rp. 10.000,00
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end produk terbaru -->

        <!-- tentang toko -->
        <hr>
        <div class="row mt-4">
            <div class="col">
                <h5 class="text-center">Toko Online Menggunakan Laravel</h5>
                <p>
                    Toko adalah demo membangun toko online menggunakan laravel framework. Di
                    dalam demo ini terdapat user bisa menginput data kategori, produk dan transaksi.
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic laborum
                    aliquam dolorum sequi nulla maiores quos incidunt veritatis numquam suscipit.
                    Cumque dolore rem obcaecati. Eos quod ad non veritatis assumenda.
                </p>
                <p>
                    Toko adalah demo membangun toko online menggunakan laravel framework. Di
                    dalam demo ini terdapat user bisa menginput data kategori, produk dan transaksi.

                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic laborum
                    aliquam dolorum sequi nulla maiores quos incidunt veritatis numquam suscipit.
                    Cumque dolore rem obcaecati. Eos quod ad non veritatis assumenda.
                </p>
                <p class="text-center">
                    <a href="" class="btn btn-outline-secondary">
                        Baca Selengkapnya
                    </a>
                </p>
            </div>
        </div>
        <!-- end tentang toko -->




        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
            integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
            integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>

    </body>

    </html>
