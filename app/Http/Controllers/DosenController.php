<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $data = array('title' => 'Dosen');
        return view('dosen.index', $data);
    }
    // public function create()
    // {
    //     $data = array('title' => 'Form Produk Baru');
    //     return view('produk.create', $data);
    // }
    // public function store(Request $request)
    // {
    //     //
    // }
    // public function show()
    // {
    //     $data = array('tittle' => 'Foto Produk');
    //     return view('produk.show', $data);
    // }
    // public function edit()
    // {
    //     $data = array('tittle' => 'Form Edit Produk');
    //     return view('produk.edit', $data);
    // }
}
