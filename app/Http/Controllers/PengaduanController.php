<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;

class PengaduanController extends Controller
{
    public function index()
    {
        // Tampilkan halaman form pengaduan
        return view('pengaduan');
    }

    public function store(Request $request)
    {
        // Validasi data yang masuk
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'feedback' => 'required|string',
        ]);

        // Simpan data ke dalam database
        Pengaduan::create([
            'name' => $request->name,
            'email' => $request->email,
            'feedback' => $request->feedback,
        ]);

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Pengaduan berhasil dikirim!');
    }
}
