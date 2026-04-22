<?php

namespace App\Http\Controllers;

use App\Models\AboutSection;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $aboutSections = AboutSection::all();
        return view('admin.about.index', compact('aboutSections'));
    }

    public function create()
    {
        return view('admin.about.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'subtitle' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_active' => 'boolean',
            'order' => 'integer'
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('about', 'public');
            $validated['image'] = $imagePath;
        }

        AboutSection::create($validated);

        return redirect()->route('admin.about')->with('success', 'About section created successfully.');
    }

    public function edit(AboutSection $aboutSection)
    {
        return view('admin.about.edit', compact('aboutSection'));
    }

    public function update(Request $request, AboutSection $aboutSection)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'subtitle' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_active' => 'boolean',
            'order' => 'integer'
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('about', 'public');
            $validated['image'] = $imagePath;
        }

        $aboutSection->update($validated);

        return redirect()->route('admin.about')->with('success', 'About section updated successfully.');
    }

    public function destroy(AboutSection $aboutSection)
    {
        $aboutSection->delete();
        return redirect()->route('admin.about')->with('success', 'About section deleted successfully.');
    }
}
