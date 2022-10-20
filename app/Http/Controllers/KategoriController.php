<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $data = array('title' => 'Kategori');
        return view('Kategori.index', $data);
    }
}
