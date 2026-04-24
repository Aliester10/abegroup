<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BusinessunitController extends Controller
{
    public function index()
    {
        $businesses = Business::orderBy('order', 'asc')->get();
        return view('admin.business.index', compact('businesses'));
    }

    public function create()
    {
        return view('admin.business.create');
    }

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

        // Upload Gambar
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('assets/business', 'public');
        }

        // ✅ SLUG AUTO UNIQUE
        $data['slug'] = $this->generateUniqueSlug($request->name);

        $data['is_active'] = $request->has('is_active');

        Business::create($data);

        return redirect()->route('admin.business.index')
            ->with('success', 'Unit bisnis berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $business = Business::findOrFail($id);
        return view('admin.business.edit', compact('business'));
    }

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

        // Update Gambar
        if ($request->hasFile('image')) {
            if ($business->image) {
                Storage::disk('public')->delete($business->image);
            }
            $data['image'] = $request->file('image')->store('assets/business', 'public');
        }

        // ✅ SLUG AUTO UNIQUE (EXCLUDE ID SENDIRI)
        $data['slug'] = $this->generateUniqueSlug($request->name, $business->id);

        $data['is_active'] = $request->has('is_active');

        $business->update($data);

        return redirect()->route('admin.business.index')
            ->with('success', 'Unit bisnis berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $business = Business::findOrFail($id);

        if ($business->image) {
            Storage::disk('public')->delete($business->image);
        }

        $business->delete();

        return redirect()->route('admin.business.index')
            ->with('success', 'Unit bisnis berhasil dihapus.');
    }

    // ✅ FUNCTION SLUG UNIQUE
    private function generateUniqueSlug($name, $id = null)
    {
        $slug = Str::slug($name);
        $originalSlug = $slug;
        $count = 1;

        while (Business::where('slug', $slug)
            ->when($id, fn($q) => $q->where('id', '!=', $id))
            ->exists()) {

            $slug = $originalSlug . '-' . $count;
            $count++;
        }

        return $slug;
    }
}