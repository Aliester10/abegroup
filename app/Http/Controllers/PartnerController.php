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
            'logo' => 'nullable|string',
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
        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $logoPath = $logo->store('partners', 'public');
            $validated['logo'] = $logoPath;
        } elseif (!empty($validated['logo']) && !str_starts_with($validated['logo'], 'http')) {
            unset($validated['logo']);
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
            'logo' => 'nullable|string',
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
        if ($request->hasFile('logo')) {
            // Delete old logo if exists and it's a file
            if ($partner->logo && !str_starts_with($partner->logo, 'http')) {
                $oldLogoPath = storage_path('app/public/' . $partner->logo);
                if (file_exists($oldLogoPath)) {
                    unlink($oldLogoPath);
                }
            }
            
            $logo = $request->file('logo');
            $logoPath = $logo->store('partners', 'public');
            $validated['logo'] = $logoPath;
        } elseif (!empty($validated['logo']) && !str_starts_with($validated['logo'], 'http')) {
            unset($validated['logo']);
        }

        $partner->update($validated);

        return redirect()->route('admin.partner')->with('success', 'Partner updated successfully.');
    }

    public function destroy(Partner $partner)
    {
        // Delete logo if exists
        if ($partner->logo) {
            $oldLogoPath = storage_path('app/public/' . $partner->logo);
            if (file_exists($oldLogoPath)) {
                unlink($oldLogoPath);
            }
        }

        $partner->delete();
        return redirect()->route('admin.partner')->with('success', 'Partner deleted successfully.');
    }
}
