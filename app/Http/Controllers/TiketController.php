<?php

namespace App\Http\Controllers;

use App\Models\Tiket;
use Illuminate\Http\Request;

class TiketController extends Controller
{
    public function show($id)
{
    // Ambil tiket berdasarkan ID
    $tiket = Tiket::findOrFail($id);
    
    // Tampilkan view dengan tiket yang telah dipesan
    return view('tikets.show', compact('tiket')); // Pastikan 'tikets.show' digunakan
}

    public function index()
    {
        $tikets = Tiket::all();
        return view('tikets.index', compact('tikets'));
    }

    public function order($id)
    {
        // Alihkan pengguna ke halaman lain atau berikan pesan bahwa pemesanan tidak diizinkan
        return redirect()->route('tickets.index')->with('error', 'Pemesanan tiket tidak diizinkan.');
    }

    public function create()
    {
        return view('tikets.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kendaraan' => 'required',
            'jumlah' => 'required|integer',
            'tujuan' => 'nullable|string',
        ]);
    
        Tiket::create($request->only(['nama', 'kendaraan', 'jumlah', 'tujuan'])); // Hanya ambil atribut yang diizinkan
        return redirect()->route('tikets.index')->with('success', 'Tiket berhasil dibeli!');
    }
}
