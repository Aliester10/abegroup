<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function index()
    {
        $abouts = About::all();
        return view('admin.about_company.index', compact('abouts'));
    }

    public function create()
    {
        return view('admin.about_company.create');
    }

    public function store(Request $request)
    {
        // 1. Validasi: Menangani 'values' sebagai array
        $request->validate([
            'nama' => 'required|string|max:255',
            'values' => 'required|array',
            'values.*' => 'required|string|max:255',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'deskripsi' => 'nullable|string',
        ]);

        // 2. Gabungkan array values menjadi string untuk database
        $valueString = implode(', ', $request->values);

        // 3. Simpan data
        $data = [
            'nama' => $request->nama,
            'value' => $valueString,
            'deskripsi' => $request->deskripsi,
        ];

        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('about', 'public');
            $data['gambar'] = $path;
        }

        About::create($data);

        return redirect()->route('admin.about.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $about = About::findOrFail($id);

        // MEMECAH string dari database kembali menjadi array untuk input dinamis di view edit
        // Kami kirim ke view agar bisa di-looping (foreach)
        $about->values_array = explode(', ', $about->value);

        return view('admin.about_company.edit', compact('about'));
    }

    public function update(Request $request, $id)
    {
        $about = About::findOrFail($id);

        // Validasi yang sama dengan store
        $request->validate([
            'nama' => 'required|string|max:255',
            'values' => 'required|array',
            'values.*' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'deskripsi' => 'nullable|string',
        ]);

        // Gabungkan array values menjadi string
        $valueString = implode(', ', $request->values);

        $data = [
            'nama' => $request->nama,
            'value' => $valueString,
            'deskripsi' => $request->deskripsi,
        ];

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama
            if ($about->gambar) {
                Storage::disk('public')->delete($about->gambar);
            }
            $path = $request->file('gambar')->store('about', 'public');
            $data['gambar'] = $path;
        }

        $about->update($data);

        return redirect()->route('admin.about.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $about = About::findOrFail($id);

        if ($about->gambar) {
            Storage::disk('public')->delete($about->gambar);
        }

        $about->delete();
        return redirect()->route('admin.about.index')->with('success', 'Data berhasil dihapus.');
    }
}
