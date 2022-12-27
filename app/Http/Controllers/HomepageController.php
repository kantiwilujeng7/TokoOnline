<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $data = array('title' => 'Homepage');
        return view('homepage.index', $data);
    }

    public function about()
    {
        $data = array('title' => 'Tentang Kami');
        return view('homepage.about', $data);
    }

    public function kontak()
    {
        $data = array('title' => 'Halaman Kontak');
        return view('homepage.kontak', $data);
    }

    public function kategori()
    {
        $data = array('title' => 'Halaman Kategori Produk');
        return view('homepage.kategori', $data);
    }
}
