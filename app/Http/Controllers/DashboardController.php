<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;

use App\Models\AboutSection;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total_banner' => Banner::count(),

            'total_about' => AboutSection::count(),
        ];

        $recent_banners = Banner::latest()->take(5)->get();


        return view('dashboard.index', compact('stats', 'recent_banners'));
    }
}
