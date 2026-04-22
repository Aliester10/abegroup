<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Activity;
use App\Models\AboutSection;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total_banner' => Banner::count(),
            'total_activity' => Activity::count(),
            'total_about' => AboutSection::count(),
        ];

        $recent_banners = Banner::latest()->take(5)->get();
        $recent_activities = Activity::latest()->take(5)->get();

        return view('dashboard.index', compact('stats', 'recent_banners', 'recent_activities'));
    }
}
