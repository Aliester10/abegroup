<?php

namespace App\Http\Controllers;

use App\Models\CompanyHighlight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CompanyhighlightController extends Controller
{
public function index()
{
    // Mengurutkan berdasarkan waktu diperbarui (updated_at) terbaru
    $highlights = CompanyHighlight::orderBy('updated_at', 'desc')->get(); 
    
    return view('admin.highlights.index', compact('highlights')); 
}

    public function create()
    {
        return view('admin.highlights.create');
    }

    public function store(Request $request)
    {
        // VALIDASI: Di sini kita cegah teks raksasa & file salah
        $request->validate([
            'badge'           => 'nullable|string|max:255', // Sesuaikan limit database
            'title'           => 'required|string|max:255',
            'description_top' => 'required|string|max:1000',
            'image'           => 'required|image|mimes:jpeg,png,jpg|max:2048' // Max 2MB
        ], [
            // Pesan custom (opsional)
            'badge.max' => 'Teks badge terlalu panjang, maksimal 255 karakter.',
            'image.max' => 'Ukuran foto terlalu besar, maksimal 2MB.',
        ]);

        $imagePath = $request->file('image')->store('highlights', 'public');

        CompanyHighlight::create([
            'badge'           => $request->badge,
            'title'           => $request->title,
            'description_top' => $request->description_top,
            'image'           => $imagePath
        ]);

        return redirect()->route('admin.highlights.index')->with('success', 'Data berhasil disimpan!');
    }

    public function edit($id)
    {
        $highlight = CompanyHighlight::findOrFail($id);
        return view('admin.highlights.edit', compact('highlight'));
    }

    public function update(Request $request, $id)
    {
        $highlight = CompanyHighlight::findOrFail($id);
        
        // VALIDASI: Sangat penting agar update tidak error SQL
        $request->validate([
            'badge'           => 'nullable|string|max:255',
            'title'           => 'required|string|max:255',
            'description_top' => 'required|string|max:1000',
            'image'           => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        // Mengambil hanya kolom yang diizinkan (keamanan ekstra)
        $data = $request->only(['badge', 'title', 'description_top']);

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($highlight->image) {
                Storage::disk('public')->delete($highlight->image);
            }
            $data['image'] = $request->file('image')->store('highlights', 'public');
        }

        $highlight->update($data);

        return redirect()->route('admin.highlights.index')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $highlight = CompanyHighlight::findOrFail($id);
        
        if ($highlight->image) {
            Storage::disk('public')->delete($highlight->image);
        }
        
        $highlight->delete();
        return redirect()->route('admin.highlights.index')->with('success', 'Data berhasil dihapus!');
    }
}