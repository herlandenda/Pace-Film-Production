<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Legalitas;
use Illuminate\Support\Facades\Storage;

class LegalitasController extends Controller
{
    // 1. Tampilkan daftar piagam & legalitas
    public function index()
    {
        $legalitas = Legalitas::latest()->get();
        return view('admin.legalitas.index', compact('legalitas'));
    }

    // 2. Form tambah dokumen baru
    public function create()
    {
        return view('admin.legalitas.create');
    }

    // 3. Simpan data + upload gambar berkas
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:3072',
            'category' => 'nullable|string|max:100',
            'description' => 'nullable|string'
        ]);

        // Simpan gambar ke folder storage/app/public/legalitas
        $imagePath = $request->file('image')->store('legalitas', 'public');

        Legalitas::create([
            'title' => $request->title,
            'image' => $imagePath,
            'category' => $request->category,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.legalitas.index')->with('success', 'Dokumen legalitas/piagam berhasil ditambahkan!');
    }

    // 4. Form edit dokumen
    public function edit($id)
    {
        $item = Legalitas::findOrFail($id);
        return view('admin.legalitas.edit', compact('item'));
    }

    // 5. Update data (ganti gambar jika ada file baru)
    public function update(Request $request, $id)
    {
        $legalitas = Legalitas::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:3072',
            'category' => 'nullable|string|max:100',
            'description' => 'nullable|string'
        ]);

        $data = [
            'title' => $request->title,
            'category' => $request->category,
            'description' => $request->description,
        ];

        // Jika upload gambar baru, hapus gambar lama
        if ($request->hasFile('image')) {
            if ($legalitas->image && Storage::disk('public')->exists($legalitas->image)) {
                Storage::disk('public')->delete($legalitas->image);
            }
            $data['image'] = $request->file('image')->store('legalitas', 'public');
        }

        $legalitas->update($data);

        return redirect()->route('admin.legalitas.index')->with('success', 'Dokumen legalitas/piagam berhasil diperbarui!');
    }

    // 6. Hapus data beserta filenya
    public function destroy($id)
    {
        $legalitas = Legalitas::findOrFail($id);

        if ($legalitas->image && Storage::disk('public')->exists($legalitas->image)) {
            Storage::disk('public')->delete($legalitas->image);
        }

        $legalitas->delete();

        return redirect()->route('admin.legalitas.index')->with('success', 'Dokumen berhasil dihapus!');
    }
}