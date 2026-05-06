<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::all();
        return view('admin.banner.index', compact('banners'));
    }

    public function create()
    {
        return view('admin.banner.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'media' => 'nullable|file|mimetypes:image/jpeg,image/png,image/jpg,image/gif,video/mp4,video/webm,video/quicktime,video/x-matroska|max:102400',
            'is_active' => 'boolean'
        ], [
            'media.mimetypes' => 'Format file harus berupa gambar (jpeg, png, jpg, gif) atau video (mp4, webm, mov, mkv).',
            'media.max' => 'Ukuran file tidak boleh lebih dari 100MB.',
        ]);

        if ($request->hasFile('media')) {
            $path = $request->file('media')->store('banners', 'public');
            $validated['image'] = $path;
        }

        Banner::create($validated);

        return redirect()->route('admin.banner')->with('success', 'Banner created successfully.');
    }

    public function edit(Banner $banner)
    {
        return view('admin.banner.edit', compact('banner'));
    }

    public function update(Request $request, Banner $banner)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'media' => 'nullable|file|mimetypes:image/jpeg,image/png,image/jpg,image/gif,video/mp4,video/webm,video/quicktime,video/x-matroska|max:102400',
            'is_active' => 'boolean'
        ], [
            'media.mimetypes' => 'Format file harus berupa gambar (jpeg, png, jpg, gif) atau video (mp4, webm, mov, mkv).',
            'media.max' => 'Ukuran file tidak boleh lebih dari 100MB.',
        ]);

        if ($request->hasFile('media')) {
            $path = $request->file('media')->store('banners', 'public');
            $validated['image'] = $path;
        }

        $banner->update($validated);

        return redirect()->route('admin.banner')->with('success', 'Banner updated successfully.');
    }

    public function destroy(Banner $banner)
    {
        $banner->delete();
        return redirect()->route('admin.banner')->with('success', 'Banner deleted successfully.');
    }
}
