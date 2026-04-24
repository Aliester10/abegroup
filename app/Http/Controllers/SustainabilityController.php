<?php

namespace App\Http\Controllers;

use App\Models\Sustainability;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SustainabilityController extends Controller
{
    public function index()
    {
        $commitments = Sustainability::latest()->paginate(10);
        return view('admin.sustainability.index', compact('commitments'));
    }

    public function create()
    {
        return view('admin.sustainability.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'button_text' => 'required|string|max:255',
            'button_url' => 'required|string|max:255',
            'points' => 'required|array|min:1',
            'points.*' => 'required|string|max:255',
            'is_active' => 'boolean'
        ]);

        $data = $request->all();
        $data['is_active'] = $request->has('is_active');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('sustainability', $imageName, 'public');
            $data['image_url'] = 'storage/sustainability/' . $imageName;
        }

        Sustainability::create($data);

        return redirect()->route('admin.sustainability.index')
            ->with('success', 'Komitmen keberlanjutan berhasil ditambahkan');
    }

    public function show(Sustainability $sustainability)
    {
        return view('admin.sustainability.show', compact('sustainability'));
    }

    public function edit(Sustainability $sustainability)
    {
        return view('admin.sustainability.edit', compact('sustainability'));
    }

    public function update(Request $request, Sustainability $sustainability)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'button_text' => 'required|string|max:255',
            'button_url' => 'required|string|max:255',
            'points' => 'required|array|min:1',
            'points.*' => 'required|string|max:255',
            'is_active' => 'boolean'
        ]);

        $data = $request->all();
        $data['is_active'] = $request->has('is_active');

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($sustainability->image_url) {
                $oldImagePath = str_replace('storage/', '', $sustainability->image_url);
                Storage::disk('public')->delete($oldImagePath);
            }

            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('sustainability', $imageName, 'public');
            $data['image_url'] = 'storage/sustainability/' . $imageName;
        }

        $sustainability->update($data);

        return redirect()->route('admin.sustainability.index')
            ->with('success', 'Komitmen keberlanjutan berhasil diperbarui');
    }

    public function destroy(Sustainability $sustainability)
    {
        $sustainability->delete();

        return redirect()->route('admin.sustainability.index')
            ->with('success', 'Komitmen keberlanjutan berhasil dihapus');
    }
}
