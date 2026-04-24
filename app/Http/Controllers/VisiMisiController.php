<?php

namespace App\Http\Controllers;

use App\Models\VisiMisi;
use Illuminate\Http\Request;

class VisiMisiController extends Controller
{
    public function index()
    {
        $visimisi = VisiMisi::first();
        return view('admin.visi_misi.index', compact('visimisi'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'visi' => 'required',
            'misi' => 'required',
        ]);
        
        $visimisi = VisiMisi::first();
        if ($visimisi) {
            $visimisi->update($request->only(['visi', 'misi']));
        } else {
            VisiMisi::create($request->only(['visi', 'misi']));
        }
        
        return redirect()->route('admin.visi_misi.index')->with('success', 'Visi Misi berhasil disimpan.');
    }
}
