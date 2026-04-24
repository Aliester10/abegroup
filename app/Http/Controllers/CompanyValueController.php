<?php

namespace App\Http\Controllers;

use App\Models\CompanyValue;
use Illuminate\Http\Request;

class CompanyValueController extends Controller
{
    public function index()
    {
        $values = CompanyValue::all();
        return view('admin.company_values.index', compact('values'));
    }

    public function create()
    {
        return view('admin.company_values.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        CompanyValue::create($request->all());

        return redirect()->route('admin.company_values.index')->with('success', 'Nilai Perusahaan berhasil ditambahkan.');
    }

    public function edit(CompanyValue $companyValue)
    {
        return view('admin.company_values.edit', compact('companyValue'));
    }

    public function update(Request $request, CompanyValue $companyValue)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $companyValue->update($request->all());

        return redirect()->route('admin.company_values.index')->with('success', 'Nilai Perusahaan berhasil diperbarui.');
    }

    public function destroy(CompanyValue $companyValue)
    {
        $companyValue->delete();
        return redirect()->route('admin.company_values.index')->with('success', 'Nilai Perusahaan berhasil dihapus.');
    }
}
