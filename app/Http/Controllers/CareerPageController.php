<?php

namespace App\Http\Controllers;

use App\Models\Career;

class CareerPageController extends Controller
{
    public function index()
    {
        $careers = Career::query()
            ->where('is_active', true)
            ->orderBy('order')
            ->orderByDesc('id')
            ->get();

        return view('pages.career', compact('careers'));
    }
}
