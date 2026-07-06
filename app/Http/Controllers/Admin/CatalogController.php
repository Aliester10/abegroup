<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Catalog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CatalogController extends Controller
{
    public function index()
    {
        $catalogs = Catalog::latest()->paginate(10);
        return view('admin.catalogs.index', compact('catalogs'));
    }

    public function create()
    {
        return view('admin.catalogs.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'file_path' => 'required|mimes:pdf|max:10240', // max 10MB
            'cover_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048', // max 2MB image
            'is_active' => 'boolean'
        ]);

        if ($request->hasFile('file_path')) {
            $validated['file_path'] = $request->file('file_path')->store('catalogs', 'public');
        }

        if ($request->hasFile('cover_image')) {
            $validated['cover_image'] = $request->file('cover_image')->store('catalog_covers', 'public');
        }

        Catalog::create($validated);

        return redirect()->route('admin.catalogs.index')->with('success', 'Katalog berhasil diunggah.');
    }

    public function edit(Catalog $catalog)
    {
        return view('admin.catalogs.edit', compact('catalog'));
    }

    public function update(Request $request, Catalog $catalog)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'file_path' => 'nullable|mimes:pdf|max:10240',
            'cover_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'is_active' => 'boolean'
        ]);

        if ($request->hasFile('file_path')) {
            if ($catalog->file_path && Storage::disk('public')->exists($catalog->file_path)) {
                Storage::disk('public')->delete($catalog->file_path);
            }
            $validated['file_path'] = $request->file('file_path')->store('catalogs', 'public');
        }

        if ($request->hasFile('cover_image')) {
            if ($catalog->cover_image && Storage::disk('public')->exists($catalog->cover_image)) {
                Storage::disk('public')->delete($catalog->cover_image);
            }
            $validated['cover_image'] = $request->file('cover_image')->store('catalog_covers', 'public');
        }

        $catalog->update($validated);

        return redirect()->route('admin.catalogs.index')->with('success', 'Katalog berhasil diperbarui.');
    }

    public function destroy(Catalog $catalog)
    {
        if ($catalog->file_path && Storage::disk('public')->exists($catalog->file_path)) {
            Storage::disk('public')->delete($catalog->file_path);
        }
        if ($catalog->cover_image && Storage::disk('public')->exists($catalog->cover_image)) {
            Storage::disk('public')->delete($catalog->cover_image);
        }
        $catalog->delete();

        return redirect()->route('admin.catalogs.index')->with('success', 'Katalog berhasil dihapus.');
    }
}
