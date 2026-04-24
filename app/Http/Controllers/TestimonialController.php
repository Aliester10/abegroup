<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    // Menampilkan daftar testimoni di dashboard admin
    public function index()
    {
        $testimonials = Testimonial::latest()->paginate(10);
        return view('admin.testimonials.index', compact('testimonials'));
    }

    // Menampilkan form tambah data
    public function create()
    {
        return view('admin.testimonials.create');
    }

    // Menyimpan data baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'client_name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'testimonial_text' => 'required',
            'rating' => 'required|integer|min:1|max:5',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = $request->all();

        // Logika upload gambar menggunakan disk public
        if ($request->hasFile('profile_image')) {
            $data['profile_image'] = $request->file('profile_image')->store('testimonials', 'public');
        }

        Testimonial::create($data);

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimoni berhasil ditambahkan.');
    }

    // Menampilkan form edit
    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    // Memperbarui data
    public function update(Request $request, Testimonial $testimonial)
    {
        $request->validate([
            'client_name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'testimonial_text' => 'required',
            'rating' => 'required|integer|min:1|max:5',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('profile_image')) {
            // Hapus gambar lama jika ada dari disk public
            if ($testimonial->profile_image) {
                Storage::disk('public')->delete($testimonial->profile_image);
            }
            $data['profile_image'] = $request->file('profile_image')->store('testimonials', 'public');
        }

        $testimonial->update($data);

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimoni berhasil diperbarui.');
    } 

    // Menghapus data
    public function destroy(Testimonial $testimonial)
    {
        // Cek apakah ada file gambar yang tersimpan di disk public
        if ($testimonial->profile_image) {
            Storage::disk('public')->delete($testimonial->profile_image);
        }

        $testimonial->delete();

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimoni berhasil dihapus.');
    }
}