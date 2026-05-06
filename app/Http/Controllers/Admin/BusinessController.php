<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Business;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BusinessController extends Controller
{
    public function index()
    {
        $businesses = Business::orderBy('order')->get();
        return view('admin.business.index', compact('businesses'));
    }

    public function create()
    {
        return view('admin.business.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            'website_link' => 'nullable|url',
            'ecomerce_link' => 'nullable|url',
            'order' => 'nullable|integer',
            'is_active' => 'boolean'
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('businesses', 'public');
            $validated['image'] = $path;
        }

        $validated['slug'] = Str::slug($request->name);
        $validated['is_active'] = $request->has('is_active');

        Business::create($validated);

        return redirect()->route('admin.business.index')->with('success', 'Unit Bisnis berhasil ditambahkan.');
    }

    public function edit(Business $business)
    {
        return view('admin.business.edit', compact('business'));
    }

    public function update(Request $request, Business $business)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            'website_link' => 'nullable|url',
            'ecomerce_link' => 'nullable|url',
            'order' => 'nullable|integer',
            'is_active' => 'boolean'
        ]);

        if ($request->hasFile('image')) {
            // Delete old image
            if ($business->image && Storage::disk('public')->exists($business->image)) {
                Storage::disk('public')->delete($business->image);
            }
            $path = $request->file('image')->store('businesses', 'public');
            $validated['image'] = $path;
        }

        $validated['slug'] = Str::slug($request->name);
        $validated['is_active'] = $request->has('is_active');

        $business->update($validated);

        return redirect()->route('admin.business.index')->with('success', 'Unit Bisnis berhasil diperbarui.');
    }

    public function destroy(Business $business)
    {
        if ($business->image && Storage::disk('public')->exists($business->image)) {
            Storage::disk('public')->delete($business->image);
        }
        $business->delete();

        return redirect()->route('admin.business.index')->with('success', 'Unit Bisnis berhasil dihapus.');
    }
}
