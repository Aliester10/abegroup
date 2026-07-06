<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\AboutSection;
use App\Models\News;
use App\Models\Business;
use App\Models\Partner;
use App\Models\User;
use App\Models\JobVacancy;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total_banner' => Banner::count(),
            'total_about' => AboutSection::count(),
            'total_news' => News::count(),
            'total_business' => Business::count(),
            'total_partner' => Partner::count(),
            'total_users' => User::count(),
            'total_jobs' => JobVacancy::count(),
        ];

        $recent_company_info = \App\Models\CompanyInfo::latest()->take(5)->get();
        $recent_news = News::latest()->take(5)->get();
        $recent_users = User::latest()->take(5)->get();

        return view('dashboard.index', compact('stats', 'recent_company_info', 'recent_news', 'recent_users'));
    }
}
