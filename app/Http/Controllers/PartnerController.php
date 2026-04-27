<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::orderBy('order')->orderByDesc('id')->get();
        return view('admin.partner.index', compact('partners'));
    }

    public function create()
    {
        return view('admin.partner.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'logo_file' => 'nullable|image|mimes:jpeg,png,jpg,webp,svg|max:2048',
            'logo_url' => 'nullable|string|max:2048',
            'slug' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'website_url' => 'nullable|url|max:255',
            'is_active' => 'boolean',
            'order' => 'nullable|integer',
        ]);

        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['name']);
        }

        $validated['order'] = $validated['order'] ?? 0;

        // Handle logo upload or URL
        if ($request->hasFile('logo_file')) {
            $logoPath = $request->file('logo_file')->store('partners', 'public');
            $validated['logo'] = $logoPath;
        } elseif (!empty($request->logo_url)) {
            $validated['logo'] = $request->logo_url;
        }

        Partner::create($validated);

        return redirect()->route('admin.partner')->with('success', 'Partner created successfully.');
    }

    public function edit(Partner $partner)
    {
        return view('admin.partner.edit', compact('partner'));
    }

    public function update(Request $request, Partner $partner)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'logo_file' => 'nullable|image|mimes:jpeg,png,jpg,webp,svg|max:2048',
            'logo_url' => 'nullable|string|max:2048',
            'slug' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'website_url' => 'nullable|url|max:255',
            'is_active' => 'boolean',
            'order' => 'nullable|integer',
        ]);

        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['name']);
        }

        $validated['order'] = $validated['order'] ?? 0;

        // Handle logo upload or URL
        if ($request->hasFile('logo_file')) {
            // Delete old logo if exists and it's a file
            if ($partner->logo && !str_starts_with($partner->logo, 'http')) {
                \Illuminate\Support\Facades\Storage::disk('public')->delete($partner->logo);
            }
            
            $logoPath = $request->file('logo_file')->store('partners', 'public');
            $validated['logo'] = $logoPath;
        } elseif (!empty($request->logo_url)) {
            // Delete old logo if exists and it's a file
            if ($partner->logo && !str_starts_with($partner->logo, 'http')) {
                \Illuminate\Support\Facades\Storage::disk('public')->delete($partner->logo);
            }
            $validated['logo'] = $request->logo_url;
        }

        $partner->update($validated);

        return redirect()->route('admin.partner')->with('success', 'Partner updated successfully.');
    }

    public function destroy(Partner $partner)
    {
        // Delete logo if exists and it's a file
        if ($partner->logo && !str_starts_with($partner->logo, 'http')) {
            \Illuminate\Support\Facades\Storage::disk('public')->delete($partner->logo);
        }

        $partner->delete();
        return redirect()->route('admin.partner')->with('success', 'Partner deleted successfully.');
    }
}
