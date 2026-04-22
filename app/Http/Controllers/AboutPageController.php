<?php

namespace App\Http\Controllers;

use App\Models\AboutSection;
use App\Models\Partner;

class AboutPageController extends Controller
{
    public function index()
    {
        $about = AboutSection::query()
            ->where('is_active', true)
            ->orderBy('order')
            ->get();

        $partners = Partner::query()
            ->where('is_active', true)
            ->orderBy('order')
            ->orderByDesc('id')
            ->get();

        return view('pages.about', compact('about', 'partners'));
    }
}
