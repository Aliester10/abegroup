<?php

namespace App\Http\Controllers;

use App\Models\Company;

class BusinessController extends Controller
{
    public function index()
    {
        $companies = Company::query()
            ->where('is_active', true)
            ->orderBy('order')
            ->orderByDesc('id')
            ->get();

        return view('pages.business', compact('companies'));
    }
}
