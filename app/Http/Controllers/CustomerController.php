<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource. *
     * @return \Illuminate\Http\Response */
    public function index()
    {
        $data = array('title' => 'Data Customer');
        return
            view('customer.index', $data);
    }
    /**
     * Show the form for creating a new resource. *
     * @return \Illuminate\Http\Response */
    public function create()
    { //
    }
    public function store(Request $request)
    {
        //
    }

    public function show($id)
    { //
    }

    public function edit($id)
    {
        $data = array('title' => 'Form Edit Customer');
        return view('customer.edit', $data);
    }

    public function update(Request $request, $id)
    { //
    }

    public function destroy($id)
    { //
    }
}
