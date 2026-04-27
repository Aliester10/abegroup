<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CompanyInfo;
use Illuminate\Http\Request;

class CompanyInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companyInfos = CompanyInfo::latest()->paginate(10);
        return view('admin.company-info.index', compact('companyInfos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.company-info.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'office_address' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'phone_alt' => 'nullable|string|max:20',
            'email' => 'required|email|max:255',
            'email_alt' => 'nullable|email|max:255',
            'operational_hours' => 'required|string|max:255',
            'map_embed' => 'nullable|string',
            'is_active' => 'boolean'
        ]);

        CompanyInfo::create($request->all());

        return redirect()->route('admin.company-info.index')
            ->with('success', 'Informasi perusahaan berhasil ditambahkan!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CompanyInfo $companyInfo)
    {
        return view('admin.company-info.edit', compact('companyInfo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CompanyInfo $companyInfo)
    {
        $request->validate([
            'office_address' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'phone_alt' => 'nullable|string|max:20',
            'email' => 'required|email|max:255',
            'email_alt' => 'nullable|email|max:255',
            'operational_hours' => 'required|string|max:255',
            'map_embed' => 'nullable|string',
            'is_active' => 'boolean'
        ]);

        $companyInfo->update($request->all());

        return redirect()->route('admin.company-info.index')
            ->with('success', 'Informasi perusahaan berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CompanyInfo $companyInfo)
    {
        $companyInfo->delete();
        
        return redirect()->route('admin.company-info.index')
            ->with('success', 'Informasi perusahaan berhasil dihapus!');
    }
}
