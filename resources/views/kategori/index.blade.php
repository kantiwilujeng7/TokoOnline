{{-- @extends('layouts.dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h1> Ini Dashboard Kategori </h1>

            </div>
        </div>
    </div>
@endsection --}}


@extends('layouts.dashboard')
@section('content')
    <div class="container-fluid">
        <!-- table kategori -->
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Kategori Produk</h4>
                        <div class="card-tools">

                            <a href="{{ route('create.kategori') }}" class="btn btn-sm btn-primary">
                                Baru
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="#">
                            <div class="row">
                                <div class="col">

                                    <input type="text" name="keyword" id="keyword" class="form-
control"
                                        placeholder="ketik keyword disini">

                                </div>
                                <div class="col-auto">
                                    <button class="btn btn-primary">
                                        Cari
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th width="50px">No</th>
                                        <th>Gambar</th>
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th>Jumlah Produk</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <img src="{{ asset('asset/bodycare2.jpg') }}" alt="kategori 1" width='150px'>
                                            <div class="row mt-2">
                                                <div class="col">
                                                    <input type="file" name="gambar" id="gambar">
                                                    <button class="btn btn-sm btn-primary">Upload</button>
                                                </div>
                                            </div>
                        </div>
                        </td>
                        <td>BC0001</td>
                        <td>Body Care Love Nature Aloe Vera</td>
                        <td>21 Produk</td>
                        <td>
                            {{-- <a href="{{ route('kategori.edit', 2) }}" --}}
                            <a href="#" class="btn btn-sm btn-primary mr-2 mb-2">
                                Edit
                            </a>
                            <button class="btn btn-sm btn-danger mb-2">
                                Hapus
                            </button>
                        </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                                <img src="{{ asset('asset/kutek.jpg') }}" alt="kategori 2" width='150px'>
                                <div class="row mt-2">
                                    <div class="col">
                                        <input type="file" name="gambar" id="gambar">
                                        <button class="btn btn-sm btn-primary">Upload</button>
                                    </div>
                                </div>
                    </div>
                    </td>
                    <td>NP0001</td>
                    <td>Glossy Nail Polish "Hot Edition"</td>
                    <td>10 Produk</td>
                    <td>
                        <a href="#" class="btn btn-sm
                btn-primary mr-2 mb-2">
                            Edit
                        </a>
                        <button class="btn btn-sm btn-danger mb-2">
                            Hapus
                        </button>
                    </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>
                            <img src="{{ asset('asset/makeup5.jpg') }}" alt="kategori 3" width='150px'>
                            <div class="row mt-2">
                                <div class="col">
                                    <input type="file" name="gambar" id="gambar">
                                    <button class="btn btn-sm btn-primary">Upload</button>
                                </div>
                            </div>
                </div>
                </td>
                <td>SC0001</td>
                <td>The One Matte Lipstick</td>
                <td>15 Produk</td>
                <td>
                    <a href="#" class="btn btn-sm
                btn-primary mr-2 mb-2">
                        Edit
                    </a>
                    <button class="btn btn-sm btn-danger mb-2">
                        Hapus
                    </button>
                </td>
                </tr>
                </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
@endsection
