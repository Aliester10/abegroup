<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index()
    {
        $careers = Career::orderBy('order')->orderByDesc('id')->get();
        return view('admin.career.index', compact('careers'));
    }

    public function create()
    {
        return view('admin.career.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'location' => 'nullable|string|max:255',
            'type' => 'nullable|string|max:255',
            'apply_url' => 'nullable|url|max:255',
            'is_active' => 'boolean',
            'order' => 'nullable|integer',
        ]);

        $validated['order'] = $validated['order'] ?? 0;

        Career::create($validated);

        return redirect()->route('admin.career')->with('success', 'Career created successfully.');
    }

    public function edit(Career $career)
    {
        return view('admin.career.edit', compact('career'));
    }

    public function update(Request $request, Career $career)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'location' => 'nullable|string|max:255',
            'type' => 'nullable|string|max:255',
            'apply_url' => 'nullable|url|max:255',
            'is_active' => 'boolean',
            'order' => 'nullable|integer',
        ]);

        $validated['order'] = $validated['order'] ?? 0;

        $career->update($validated);

        return redirect()->route('admin.career')->with('success', 'Career updated successfully.');
    }

    public function destroy(Career $career)
    {
        $career->delete();
        return redirect()->route('admin.career')->with('success', 'Career deleted successfully.');
    }
}
