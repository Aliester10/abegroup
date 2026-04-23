<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BusinessunitController extends Controller
{
    /**
     * Menampilkan daftar semua unit bisnis.
     */
    public function index()
    {
        $businesses = Business::orderBy('order', 'asc')->get();
        return view('admin.business.index', compact('businesses'));
    }

    /**
     * Menampilkan form untuk menambah unit bisnis baru.
     */
    public function create()
    {
        return view('admin.business.create');
    }

    /**
     * Menyimpan data unit bisnis ke database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'         => 'required|string|max:255',
            'category'     => 'required|string|max:255',
            'image'        => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'description'  => 'required',
            'website_link' => 'nullable|url',
        ]);

        $data = $request->all();

        // Proses Upload Gambar
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('assets/business', 'public');
        }

        // Slug otomatis dari nama
        $data['slug'] = Str::slug($request->name);

        // Handle checkbox is_active
        $data['is_active'] = $request->has('is_active');

        Business::create($data);

        return redirect()->route('admin.business.index')
            ->with('success', 'Unit bisnis berhasil ditambahkan.');
    }

    /**
     * Menampilkan form edit untuk unit bisnis tertentu.
     */
    public function edit($id)
    {
        $business = Business::findOrFail($id);
        return view('admin.business.edit', compact('business'));
    }

    /**
     * Memperbarui data unit bisnis di database.
     */
    public function update(Request $request, $id)
    {
        $business = Business::findOrFail($id);

        $request->validate([
            'name'         => 'required|string|max:255',
            'category'     => 'required|string|max:255',
            'image'        => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'description'  => 'required',
            'website_link' => 'nullable|url',
        ]);

        $data = $request->all();

        // Update Gambar jika ada file baru
        if ($request->hasFile('image')) {
            // Hapus gambar lama
            if ($business->image) {
                Storage::disk('public')->delete($business->image);
            }
            $data['image'] = $request->file('image')->store('assets/business', 'public');
        }

        $data['slug'] = Str::slug($request->name);
        $data['is_active'] = $request->has('is_active');

        $business->update($data);

        return redirect()->route('admin.business.index')
            ->with('success', 'Unit bisnis berhasil diperbarui.');
    }

    /**
     * Menghapus unit bisnis dari database.
     */
    public function destroy($id)
    {
        $business = Business::findOrFail($id);

        // Hapus file gambar dari storage
        if ($business->image) {
            Storage::disk('public')->delete($business->image);
        }

        $business->delete();

        return redirect()->route('admin.business.index')
            ->with('success', 'Unit bisnis berhasil dihapus.');
    }
}
