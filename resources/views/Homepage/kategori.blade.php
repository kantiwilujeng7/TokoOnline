@extends('layouts.template')
@include('layouts.menu')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="row mt-4">
                    <div class="col">
                        <h3 class="text-center">Kategori Produc</h3>
                        <div class="card-group">
                            <div class="card">
                                <img src="asset\image\gambar1.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Blazer</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </div>
                            </div>
                            <div class="card">
                                <img src="asset\image\gambar2.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Kids</h5>
                                    <p class="card-text">This card has supporting text below as a natural lead-in to
                                        additional content.</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </div>
                            </div>
                            <div class="card">
                                <img src="asset\image\gambar3.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Long Dress</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to additional content. This card has even longer content than the first to
                                        show that equal height action.</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    @extends('layouts.template')
@section('content')
    <div class="container">
        <!-- kategori produk -->
        <div class="row mt-4">
            <div class="col col-md-12 col-sm-12 mb-4">
                <h2 class="text-center">Kategori Produk</h2>
            </div>
            <!-- kategori pertama -->
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <a href="{{ URL::to('kategori/satu') }}">
                        <img src="{{ asset('images/slide1.jpg') }}" alt="foto kategori" class="card-img-top">
                    </a>
                    <div class="card-body">
                        <a href="{{ URL::to('kategori/satu') }}" class="text-decoration-none">
                            <p class="card-text">Kategori Pertama</p>
                        </a>
                    </div>
                </div>
            </div>
            <!-- kategori kedua -->
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <a href="{{ URL::to('kategori/dua') }}">
                        <img src="{{ asset('images/slide1.jpg') }}" alt="foto kategori" class="card-img-top">
                    </a>
                    <div class="card-body">
                        <a href="{{ URL::to('kategori/dua') }}" class="text-decoration-none">
                            <p class="card-text">Kategori Kedua</p>
                        </a>
                    </div>
                </div>
            </div>
            <!-- kategori ketiga -->
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <a href="{{ URL::to('kategori/tiga') }}">
                        <img src="{{ asset('images/slide1.jpg') }}" alt="foto kategori" class="card-img-top">
                    </a>
                    <div class="card-body">
                        <a href="{{ URL::to('kategori/tiga') }}" class="text-decoration-none">
                            <p class="card-text">Kategori Ketiga</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end kategori produk -->
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
    </div>
@endsection
