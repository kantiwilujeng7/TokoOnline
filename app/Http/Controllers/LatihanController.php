<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function home()
    {
        return "Oke ini latihan controller";
    }
    public function beranda()
    {
        $data = array('nama' => 'Kanti');
        return view('beranda', $data);
    }
}
