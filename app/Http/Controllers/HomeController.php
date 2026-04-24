<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\AboutSection;
use App\Models\Activity;
use App\Models\Banner;
use App\Models\Career;
use App\Models\Company;
use App\Models\Business;
use App\Models\HomeStat;
use App\Models\CoreValue;
use App\Models\Sustainability;

class HomeController extends Controller
{
    public function index()
    {
        $hero = Banner::query()->where('is_active', true)->latest()->first();
        $about_company = About::latest()->first();
        $about_section = AboutSection::query()->where('is_active', true)->first();

        $companies = Company::query()
            ->where('is_active', true)
            ->orderBy('order')
            ->orderByDesc('id')
            ->get();

        $activities = Activity::query()
            ->where('is_active', true)
            ->orderByDesc('date')
            ->orderByDesc('id')
            ->take(6)
            ->get();

        $careers = Career::query()
            ->where('is_active', true)
            ->orderBy('order')
            ->orderByDesc('id')
            ->take(4)
            ->get();

        $businesses = Business::query()
            ->where('is_active', true)
            ->orderBy('order')
            ->get();

        $stats = HomeStat::where('is_active', true)
            ->orderBy('order')
            ->get()
            ->map(function ($stat) {
                return [
                    'label' => $stat->label,
                    'value' => $stat->value,
                    'suffix' => $stat->suffix,
                    'icon' => $stat->icon,
                ];
            })
            ->toArray();

        $aboutHighlights = [
            ['title' => 'Efisiensi', 'desc' => 'Operasional gesit & berdampak'],
            ['title' => 'Kolaborasi', 'desc' => 'Kemitraan strategis jangka panjang'],
        ];

        $coreValues = CoreValue::where('is_active', true)
            ->orderBy('order')
            ->get()
            ->map(function ($value) {
                // Handle Font Awesome icon classes
                $iconClass = trim($value->icon);
                if (!empty($iconClass)) {
                    // If it doesn't start with 'fa-' or 'fas ', add 'fas ' prefix
                    if (strpos($iconClass, 'fa-') !== 0 && strpos($iconClass, 'fas ') !== 0) {
                        $iconClass = 'fas ' . $iconClass;
                    }
                    $iconHtml = '<i class="' . $iconClass . '"></i>';
                } else {
                    // Default fallback icon
                    $iconHtml = '<i class="fas fa-star"></i>';
                }
                return [
                    'title' => $value->title,
                    'desc' => $value->description,
                    'icon' => $iconHtml,
                ];
            })
            ->toArray();

        $sustainabilityCommitment = Sustainability::where('is_active', true)->first();
        $sustainabilityPoints = $sustainabilityCommitment?->points ?? [
            'Efisiensi sumber daya dan pengelolaan risiko operasional',
            'Kepatuhan dan tata kelola yang kuat di seluruh unit bisnis',
            'Inisiatif sosial dan peningkatan kapabilitas SDM',
        ];

        return view('pages.home', [
            'heroImageUrl' => $hero?->image ? asset('storage/' . $hero->image) : null,
            'heroSubtitle' => $hero?->description,
            'aboutTitle' => $about_section?->title,
            'aboutContent' => $about_section?->content,
            'aboutImageUrl' => $about_section?->image ? asset('storage/' . $about_section->image) : null,
            'aboutSection' => $about_section,
            'about_company' => $about_company,
            'stats' => $stats,
            'aboutHighlights' => $aboutHighlights,
            'companies' => $companies,
            'coreValues' => $coreValues,
            'sustainabilityPoints' => $sustainabilityPoints,
            'sustainabilityImageUrl' => $sustainabilityCommitment?->image_url,
            'sustainabilityTitle' => $sustainabilityCommitment?->title ?? 'Komitmen Keberlanjutan',
            'sustainabilitySubtitle' => $sustainabilityCommitment?->subtitle ?? 'Bertumbuh dengan tanggung jawab',
            'sustainabilityDescription' => $sustainabilityCommitment?->description ?? 'Kami memastikan pertumbuhan bisnis berjalan selaras dengan kepatuhan, efisiensi energi, dan kontribusi sosial.',
            'sustainabilityButtonText' => $sustainabilityCommitment?->button_text ?? 'Kolaborasi Bersama Kami',
            'sustainabilityButtonUrl' => $sustainabilityCommitment?->button_url ?? '/hubungi',
            'activities' => $activities,
            'careers' => $careers,
            'businesses' => $businesses,
        ]);
    }
}
