<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use App\Models\CatalogLead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CatalogController extends Controller
{
    public function index()
    {
        $catalogs = Catalog::where('is_active', true)->latest()->get();
        return view('pages.catalog.index', compact('catalogs'));
    }

    public function download(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'catalog_id' => 'required|exists:catalogs,id'
        ]);

        $catalog = Catalog::findOrFail($request->catalog_id);

        if (!$catalog->file_path || !Storage::disk('public')->exists($catalog->file_path)) {
            return back()->with('error', 'Maaf, file katalog tidak ditemukan.');
        }

        CatalogLead::create([
            'catalog_id' => $catalog->id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        return Storage::disk('public')->download($catalog->file_path, $catalog->title . '.pdf');
    }
}
