<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $data = array('title' => 'Transaksi');
        return view('transaksi.index', $data);
    }
    public function create()
    {
        $data = array('title' => 'Transaksi');
        return view('transaksi.create', $data);
    }
}
