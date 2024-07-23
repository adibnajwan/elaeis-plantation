<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index()
    {
        return view('form');  // Mengembalikan halaman view ke user
    }

    public function store(Request $request)
    {
        $request->validate([                    // Data diterima sebagai objek Request
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'birthday' => 'required',           // Menangani data (Proses, Validasi, Disimpan)
            'city' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'phone_number' => 'required',
            'cv' => 'required'
        ]);

        Career::create($request->all());

        return redirect()->route('form.index')->with('success', 'Berhasil mendaftar'); // Akan kembali ke halaman form dan mendapat pesan Berhasil mendaftar
    }
}