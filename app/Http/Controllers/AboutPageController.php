<?php

namespace App\Http\Controllers;

use App\Models\AboutSection;
use App\Models\Partner;
use App\Models\Timeline;

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

        $timelines = Timeline::query()
            ->where('is_active', true)
            ->orderBy('order')
            ->get();

        return view('pages.about', compact('about', 'partners', 'timelines'));
    }
}
