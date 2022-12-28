<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- Bootstrap 5 JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
    <!-- Font Awesome 4-->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .fa {
            padding: 20px;
            font-size: 30px;
            width: 50px;
            text-align: center;
            text-decoration: none;
            margin: 5px 2px;
        }

        .fa:hover {
            opacity: 0.7;
        }

        footer {
            text-align: center;
            padding: 3px;
            background-color: rgb(200, 200, 200);
            color: rgb(0, 0, 0);
        }
    </style>

    {{-- <title>{{ $title }}</title> --}}
    <title> Exotica Store </title>


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

        <div id="" class="carousel slide" data-bs-ride="carousel">
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
                        <h5></h5>
                        <p>Promo Desember</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="asset/slide2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5></h5>
                        <p>Promo Desember</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="asset/slide3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5></h5>
                        <p>Promo Desember</p>
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
        </div> <br> <br>

        {{-- CATEGORY PAGE --}}

        <div class="row mt-4; justify-content-center" id="kategori">
            <div class="col col-md-12 col-sm-12 mb-4">
                <h2 class="text-center"> Kategori Produk </h2>
            </div>

            <div class="row mt-4" style="align-self: center">
                <!-- produk pertama -->
                <div class="col-md-3">
                    <div class="card mb-4 shadow-sm">
                        <a href="{{ URL::to('produk/satu') }}">
                            <img src="{{ asset('asset/skincare1.jpg') }}" alt="foto produk" class="card-img-top">
                        </a>
                        <div class="card-body">
                            <h4 class="card-title">
                                Skin Care
                            </h4>
                            <div class="col">
                                <p class="card-text">
                                    Kami percaya bahwa kulit cantik bisa diraih oleh semua orang. Rangkaian perawatan kulit
                                    kami
                                    berkualitas dengan hasil teruji, hadir untuk semua jenis kulit dan beragam kebutuhan.
                                    Dapatkan kulit yang cerah dan
                                    glowing sekarang juga!
                                </p>
                                <div class="col-auto">
                                    <a href="#" class="btn btn-primary">See More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- produk kedua -->
                <div class="col-md-3">
                    <div class="card mb-4 shadow-sm">
                        <a href="{{ URL::to('produk/satu') }}">
                            <img src="{{ asset('asset/bodycare4.PNG') }}" alt="foto produk" class="card-img-top">
                        </a>
                        <div class="card-body">
                            <h4 class="card-title">
                                Body Care
                            </h4>
                            <p class="card-text">
                                Perawatan tubuh menyeluruh berarti merawat tubuh Anda dari ujung kepala hingga kaki. Kami
                                menawarkan berbagai produk perawatan tubuh harian yang memainkan peranan penting sehingga
                                anda akan selalu merasa bersih, segar, dan sehat.
                            </p>
                            <a href="#" class="btn btn-primary">See More</a>
                        </div>
                    </div>
                </div>

                <!-- produk ketiga -->
                <div class="col-md-3">
                    <div class="card mb-4 shadow-sm">
                        <a href="{{ URL::to('produk/satu') }}">
                            <img src="{{ asset('asset/parfume.PNG') }}" alt="foto produk" class="card-img-top">
                        </a>
                        <div class="card-body">
                            <h4 class="card-title">
                                Parfume
                            </h4>
                            <p class="card-text">
                                Parfum atau wewangian dapat membangkitkan gairah, mengembalikan kenangan indah atau membawa
                                Anda
                                ke tempat impian yang jauh. Anda dapat memilih berbagai macam wewangian kami yang
                                terinspirasi
                                dari mimpi-mimpi indah.
                            </p>
                            <a href="#" class="btn btn-primary">See More</a>
                        </div>
                    </div>
                </div>

                <!-- produk ketiga -->
                <div class="col-md-3">
                    <div class="card mb-4 shadow-sm">
                        <a href="{{ URL::to('produk/satu') }}">
                            <img src="{{ asset('asset/makeup.PNG') }}" alt="foto produk" class="card-img-top">
                        </a>
                        <div class="card-body">
                            <h4 class="card-title">
                                Make Up
                            </h4>
                            <p class="card-text">
                                Kami menawarkan pilihan terbaik dari tren kecantikan saat ini lengkap dengan warna-warni
                                yang
                                sesuai dengan kepribadian Anda di setiap suasana. Baik warna dasar klasik ataupun kombinasi
                                warna yang menginspirasi.
                            </p>
                            <a href="#" class="btn btn-primary">See More</a>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        <!-- end katalog -->

        <!-- produk Promo-->
        <div class="row mt-4; justify-content-center" id="promo">
            <div class="col col-md-12 col-sm-12 mb-4">
                <h2 class="text-center"> Promo </h2>
            </div>
            <!-- produk pertama -->
            <div class="col-md-2">
                <div class="card mb-4 shadow-sm">
                    <a href="{{ URL::to('produk/dua') }}">
                        <img src="{{ asset('asset/bodycare2.jpg') }}" alt="Promo Body Care" class="card-img-top">
                    </a>
                    <div class="card-body">
                        <a href="{{ URL::to('produk/dua') }}" class="text-decoration-none">
                            <p class="card-text">
                                Promo Body Care
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
            <div class="col-md-2">
                <div class="card mb-4 shadow-sm">
                    <a href="{{ URL::to('produk/dua') }}">
                        <img src="{{ asset('asset/kutek.jpg') }}" alt="Promo Nail Polish" class="card-img-top">
                    </a>
                    <div class="card-body">
                        <a href="{{ URL::to('produk/dua') }}" class="text-decoration-none">
                            <p class="card-text">
                                Promo Kutek
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
            <div class="col-md-2">
                <div class="card mb-4 shadow-sm">
                    <a href="{{ URL::to('produk/tiga') }}">
                        <img src="{{ asset('asset/skincare.PNG') }}" alt="Promo Make Up" class="card-img-top">
                    </a>
                    <div class="card-body">
                        <a href="{{ URL::to('produk/tiga') }}" class="text-decoration-none">
                            <p class="card-text">
                                Promo Skin Care
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
            <!-- produk keempat -->
            <div class="col-md-2">
                <div class="card mb-4 shadow-sm">
                    <a href="{{ URL::to('produk/dua') }}">
                        <img src="{{ asset('asset/makeup3.jpg') }}" alt="Promo Nail Polish" class="card-img-top">
                    </a>
                    <div class="card-body">
                        <a href="{{ URL::to('produk/dua') }}" class="text-decoration-none">
                            <p class="card-text">
                                Promo Make Up
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
            <!-- produk keempat -->
            <div class="col-md-2">
                <div class="card mb-4 shadow-sm">
                    <a href="{{ URL::to('produk/dua') }}">
                        <img src="{{ asset('asset/makeup4.jpg') }}" alt="Promo Nail Polish" class="card-img-top">
                    </a>
                    <div class="card-body">
                        <a href="{{ URL::to('produk/dua') }}" class="text-decoration-none">
                            <p class="card-text">
                                Promo Make Up
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

        <!-- produk Promo 2-->
        <div class="row mt-4; justify-content-center">
            {{-- <div class="col col-md-12 col-sm-12 mb-4">
                <h2 class="text-center"> Promo </h2>
            </div> --}}
            <!-- produk pertama -->
            <div class="col-md-2">
                <div class="card mb-4 shadow-sm">
                    <a href="{{ URL::to('produk/dua') }}">
                        <img src="{{ asset('asset/skincare2.jpg') }}" alt="Promo Skin Care" class="card-img-top">
                    </a>
                    <div class="card-body">
                        <a href="{{ URL::to('produk/dua') }}" class="text-decoration-none">
                            <p class="card-text">
                                Promo Skin Care
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
            <div class="col-md-2">
                <div class="card mb-4 shadow-sm">
                    <a href="{{ URL::to('produk/dua') }}">
                        <img src="{{ asset('asset/skincare3.jpg') }}" alt="Promo Nail Polish" class="card-img-top">
                    </a>
                    <div class="card-body">
                        <a href="{{ URL::to('produk/dua') }}" class="text-decoration-none">
                            <p class="card-text">
                                Promo Skin Care
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
            <div class="col-md-2">
                <div class="card mb-4 shadow-sm">
                    <a href="{{ URL::to('produk/tiga') }}">
                        <img src="{{ asset('asset/skincare4.jpg') }}" alt="Promo Make Up" class="card-img-top">
                    </a>
                    <div class="card-body">
                        <a href="{{ URL::to('produk/tiga') }}" class="text-decoration-none">
                            <p class="card-text">
                                Promo Skin Care
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
            <!-- produk keempat -->
            <div class="col-md-2">
                <div class="card mb-4 shadow-sm">
                    <a href="{{ URL::to('produk/dua') }}">
                        <img src="{{ asset('asset/makeup6.jpg') }}" alt="Promo Nail Polish" class="card-img-top">
                    </a>
                    <div class="card-body">
                        <a href="{{ URL::to('produk/dua') }}" class="text-decoration-none">
                            <p class="card-text">
                                Promo Make Up
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
            <!-- produk keempat -->
            <div class="col-md-2">
                <div class="card mb-4 shadow-sm">
                    <a href="{{ URL::to('produk/dua') }}">
                        <img src="{{ asset('asset/bodycare3.jpg') }}" alt="Promo Body Care" class="card-img-top">
                    </a>
                    <div class="card-body">
                        <a href="{{ URL::to('produk/dua') }}" class="text-decoration-none">
                            <p class="card-text">
                                Promo Body Care
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
        <!-- end produk promo 2 -->


        <!-- tentang toko -->
        <hr>
        <div class="row mt-4; justify-content-center" id="tentang">
            <div class="col">
                <h5 class="text-center"> Tentang Kami </h5>
                <p class="text-center">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic laborum aliquam dolorum sequi nulla
                    maiores quos incidunt veritatis numquam suscipit. Cumque dolore rem obcaecati. Eos quod ad non veritatis
                    assumenda. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic laborum aliquam dolorum sequi
                    nulla maiores quos incidunt veritatis numquam suscipit. Cumque dolore rem obcaecati. Eos quod ad non
                    veritatis
                    assumenda.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic laborum aliquam dolorum sequi
                    nulla maiores quos incidunt veritatis numquam suscipit. Cumque dolore rem obcaecati.
                </p>

                <p class="text-center">
                    <a href="" class="btn btn-outline-secondary">
                        Baca Selengkapnya
                    </a>
                </p>
            </div>
        </div>
        <!-- end tentang toko -->

        <!-- kontak toko -->

        <hr>
        <div id="kontak">
            <h5 class="text-center"> Kontak </h5>
            <p class="text-center">
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-instagram"></a>
            </p>

        </div>
        <!-- end kontak toko -->

        <footer>
            <p> Copyright @2022 Exotica Cosmetics Store. All rights reserved<br>
                <a href="#produk">Exotica Store</a>
            </p>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
            integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
            integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>

    </body>

    </html>
