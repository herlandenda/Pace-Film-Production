<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portofolio; // Memanggil model Portofolio

class PortofolioController extends Controller
{
    // Menampilkan halaman daftar portofolio (video)
    public function index()
    {
        // Mengambil semua data portofolio dari database
        $portofolios = Portofolio::all(); 
        
        // Melempar data ke tampilan halaman admin
        return view('admin.portofolio.index', compact('portofolios'));
    }

    // Fungsi untuk menampilkan halaman form tambah
    public function create()
    {
        return view('admin.portofolio.create');
    }

    // Fungsi untuk memproses data dari form ke database
    public function store(Request $request)
    {
        // 1. Cek apakah datanya sudah diisi semua dengan benar
        $request->validate([
            'title' => 'required',
            'category' => 'required',
            'youtube_url' => 'required|url',
            'description' => 'nullable'
        ]);

        // 2. Simpan ke database
        Portofolio::create($request->all());

        // 3. Kembali ke halaman awal dengan pesan sukses
        return redirect()->route('admin.portofolio.index')->with('success', 'Video berhasil ditambahkan!');
    }


    // Menampilkan halaman form edit dengan data lama
    public function edit($id)
    {
        $portofolio = Portofolio::findOrFail($id);
        return view('admin.portofolio.edit', compact('portofolio'));
    }

    // Memproses data baru dari form edit ke database
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'category' => 'required',
            'youtube_url' => 'required|url',
            'description' => 'nullable'
        ]);

        $portofolio = Portofolio::findOrFail($id);
        $portofolio->update($request->all());

        return redirect()->route('admin.portofolio.index')->with('success', 'Video berhasil diperbarui!');
    }

    // Menghapus data dari database
    public function destroy($id)
    {
        $portofolio = Portofolio::findOrFail($id);
        $portofolio->delete();

        return redirect()->route('admin.portofolio.index')->with('success', 'Video berhasil dihapus!');
    }
}