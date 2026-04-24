<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CoreValue;

class CoreValueController extends Controller
{
    public function index()
    {
        $coreValues = CoreValue::orderBy('order')->get();
        return view('admin.core-values.index', compact('coreValues'));
    }

    public function create()
    {
        return view('admin.core-values.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'icon' => 'nullable|string|max:255',
            'order' => 'required|integer|min:0',
            'is_active' => 'boolean',
        ]);

        CoreValue::create($validated);

        return redirect()->route('admin.core-values.index')
            ->with('success', 'Nilai inti berhasil ditambahkan.');
    }

    public function edit(CoreValue $coreValue)
    {
        return view('admin.core-values.edit', compact('coreValue'));
    }

    public function update(Request $request, CoreValue $coreValue)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'icon' => 'nullable|string|max:255',
            'order' => 'required|integer|min:0',
            'is_active' => 'boolean',
        ]);

        $coreValue->update($validated);

        return redirect()->route('admin.core-values.index')
            ->with('success', 'Nilai inti berhasil diperbarui.');
    }

    public function destroy(CoreValue $coreValue)
    {
        $coreValue->delete();

        return redirect()->route('admin.core-values.index')
            ->with('success', 'Nilai inti berhasil dihapus.');
    }
}
