<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Merchandise;
use Illuminate\Support\Facades\Storage;

class MerchandiseController extends Controller
{
    // 1. Menampilkan daftar merchandise
    public function index()
    {
        $merchandises = Merchandise::all();
        return view('admin.merchandise.index', compact('merchandises'));
    }

    // 2. Halaman form tambah
    public function create()
    {
        return view('admin.merchandise.create');
    }

    // 3. Simpan data + upload foto
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'description' => 'nullable|string'
        ]);

        // Simpan foto ke folder storage/app/public/merchandise
        $imagePath = $request->file('image')->store('merchandise', 'public');

        Merchandise::create([
            'name' => $request->name,
            'image' => $imagePath,
            'price' => $request->price,
            'stock' => $request->stock,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.merchandise.index')->with('success', 'Produk merchandise berhasil ditambahkan!');
    }

    // 4. Halaman form edit
    public function edit($id)
    {
        $merchandise = Merchandise::findOrFail($id);
        return view('admin.merchandise.edit', compact('merchandise'));
    }

    // 5. Update data (ganti foto jika ada upload baru)
    public function update(Request $request, $id)
    {
        $merchandise = Merchandise::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'description' => 'nullable|string'
        ]);

        $data = [
            'name' => $request->name,
            'price' => $request->price,
            'stock' => $request->stock,
            'description' => $request->description,
        ];

        // Jika upload foto baru, hapus foto lama lalu simpan yang baru
        if ($request->hasFile('image')) {
            if ($merchandise->image && Storage::disk('public')->exists($merchandise->image)) {
                Storage::disk('public')->delete($merchandise->image);
            }
            $data['image'] = $request->file('image')->store('merchandise', 'public');
        }

        $merchandise->update($data);

        return redirect()->route('admin.merchandise.index')->with('success', 'Produk merchandise berhasil diperbarui!');
    }

    // 6. Hapus data sekaligus fotonya
    public function destroy($id)
    {
        $merchandise = Merchandise::findOrFail($id);

        if ($merchandise->image && Storage::disk('public')->exists($merchandise->image)) {
            Storage::disk('public')->delete($merchandise->image);
        }

        $merchandise->delete();

        return redirect()->route('admin.merchandise.index')->with('success', 'Produk berhasil dihapus!');
    }
}