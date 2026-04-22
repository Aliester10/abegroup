<?php

namespace App\Http\Controllers;

use App\Models\CompanyHighlight;
use Illuminate\Http\Request;

class CompanyhighlightController extends Controller
{
    public function index()
    {
        $highlights = CompanyHighlight::all();
        // Pastikan folder view kamu ada di resources/views/admin/highlights/index.blade.php
        // Kalau foldernya cuma di 'highlights', biarkan tetap 'highlights.index'
        return view('admin.highlights.index', compact('highlights')); 
    }

    public function create()
    {
        return view('admin.highlights.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description_top' => 'required',
            'image' => 'required|image'
        ]);

        $imagePath = $request->file('image')->store('highlights', 'public');

        CompanyHighlight::create([
            'badge' => $request->badge,
            'title' => $request->title,
            'description_top' => $request->description_top,
            'image' => $imagePath
        ]);

        // UBAH KE admin.highlights.index
        return redirect()->route('admin.highlights.index');
    }

    public function edit($id)
    {
        $highlight = CompanyHighlight::findOrFail($id);
        return view('admin.highlights.edit', compact('highlight'));
    }

    public function update(Request $request, $id)
    {
        $highlight = CompanyHighlight::findOrFail($id);
        
        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('highlights', 'public');
        }

        $highlight->update($data);

        return redirect()->route('admin.highlights.index');
    }

    public function destroy($id)
    {
        CompanyHighlight::findOrFail($id)->delete();
        return redirect()->route('admin.highlights.index');
    }
}