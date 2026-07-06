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
            'catalog_id' => 'required'
        ]);

        if ($request->catalog_id === 'all') {
            $catalogs = Catalog::where('is_active', true)->get();
            if ($catalogs->isEmpty()) {
                return back()->with('error', 'Maaf, tidak ada katalog yang tersedia.');
            }

            foreach ($catalogs as $catalog) {
                CatalogLead::create([
                    'catalog_id' => $catalog->id,
                    'name' => $request->name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                ]);
            }

            $zip = new \ZipArchive();
            $zipFileName = 'Semua_Katalog_ABE_Group.zip';
            $zipFilePath = storage_path('app/public/' . $zipFileName);

            if ($zip->open($zipFilePath, \ZipArchive::CREATE | \ZipArchive::OVERWRITE) === TRUE) {
                foreach ($catalogs as $catalog) {
                    if ($catalog->file_path && Storage::disk('public')->exists($catalog->file_path)) {
                        $filePath = Storage::disk('public')->path($catalog->file_path);
                        $zip->addFile($filePath, $catalog->title . '.pdf');
                    }
                }
                $zip->close();
            }

            if (!file_exists($zipFilePath)) {
                return back()->with('error', 'Gagal membuat file ZIP. Pastikan file katalog tersedia.');
            }

            return response()->download($zipFilePath)->deleteFileAfterSend(true);
        }

        $request->validate([
            'catalog_id' => 'exists:catalogs,id'
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
