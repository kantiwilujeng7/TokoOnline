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
    <title>{{ $title }}</title>
    <style>
        .h2 {
            font-family: "Times New Roman", Times, serif;
        }
    </style>

</head>

<body>

    <!-- menunya kita taruh persis di bawah <body> -->
    @include('layouts.menumhs')
    {{-- @include('layouts.isi')
        @include('layouts.kategori') --}}
    <!-- di bawah menu baru kontennya -->
    <!-- Mulai sini kontennya depannya kasih @ sama yield-->
    @yield('content')
    <!-- Sampai sini -->
    @extends('layouts.template')
    @section('content')
        <br>

        {{-- CATEGORY PAGE --}}

        <div class="row mt-4" id="kategori">
            <div class="col col-md-12 col-sm-12 mb-4">

                {{-- <div class="container mt-3"> --}}
                <h2 class="text-center mt-5">{{ $text }}</h2> <br>
                {{-- <p>Image at the top (card-img-top):</p> --}}
                {{-- <div class="container mt-2 text-center">
                        <a href="{{ URL::to('mahasiswa/pendaftaran') }}" type="button"
                            class="btn btn-primary"> Pendaftaran </a>

                        <a href="{{ URL::to('mahasiswa/ujian') }}" type="button" class="btn btn-primary"> Ujian </a>

                        <a href="{{ URL::to('mahasiswa/nilai') }}" type="button" class="btn btn-primary"> Nilai </a>
                    </div> --}}

            </div>
        </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
            integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
            integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>

    </body>

    </html>
