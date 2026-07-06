<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CatalogLead;
use Illuminate\Http\Request;

class CatalogLeadController extends Controller
{
    public function index()
    {
        $leads = CatalogLead::with('catalog')->latest()->paginate(20);
        return view('admin.catalog_leads.index', compact('leads'));
    }
}
