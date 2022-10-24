<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\checkin;

class checkinController extends Controller
{
    public function index()
    {
        // return "test";
        return view ('index');
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'Nopol' => 'required',
            'Tanggal' => 'required',
            'jam' => 'required',
            'Jenis_kendaraan' => 'required',

        ]);

        $data = new checkin;
        $data ->Nopol = $request->Nopol;
        $data ->Tanggal = $request->Tanggal;
        $data ->jam = $request->jam;
        $data ->Jenis_kendaraan = $request->Jenis_kendaraan;
        $data ->save();
        return $data;

        // checkin::create($request->all());
        // return view ('create')->with('succes', 'data berhasil ditambahkan');
    }

    public function show ()
    {
        $data = checkin::all();
        return view ('create');
    }
}
