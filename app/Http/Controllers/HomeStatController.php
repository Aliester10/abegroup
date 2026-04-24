<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeStat;

class HomeStatController extends Controller
{
    public function index()
    {
        $homeStats = HomeStat::orderBy('order')->get();
        return view('admin.home-stats.index', compact('homeStats'));
    }

    public function create()
    {
        return view('admin.home-stats.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'label' => 'required|string|max:255',
            'value' => 'required|numeric|min:0',
            'suffix' => 'nullable|string|max:10',
            'icon' => 'nullable|string',
            'order' => 'required|integer|min:0',
            'is_active' => 'boolean',
        ]);

        HomeStat::create($validated);

        return redirect()->route('admin.home-stats.index')
            ->with('success', 'Home statistic created successfully.');
    }

    public function edit(HomeStat $homeStat)
    {
        return view('admin.home-stats.edit', compact('homeStat'));
    }

    public function update(Request $request, HomeStat $homeStat)
    {
        $validated = $request->validate([
            'label' => 'required|string|max:255',
            'value' => 'required|numeric|min:0',
            'suffix' => 'nullable|string|max:10',
            'icon' => 'nullable|string',
            'order' => 'required|integer|min:0',
            'is_active' => 'boolean',
        ]);

        $homeStat->update($validated);

        return redirect()->route('admin.home-stats.index')
            ->with('success', 'Home statistic updated successfully.');
    }

    public function destroy(HomeStat $homeStat)
    {
        $homeStat->delete();

        return redirect()->route('admin.home-stats.index')
            ->with('success', 'Home statistic deleted successfully.');
    }
}
