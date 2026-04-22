<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutSection;
use App\Models\Activity;
use App\Models\Banner;
use App\Models\Career;
use App\Models\Company;

class HomeController extends Controller
{
    public function index()
    {
        $hero = Banner::query()->where('is_active', true)->latest()->first();
        $about = AboutSection::query()->where('is_active', true)->orderBy('order')->first();

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

        $stats = [
            [
                'label' => 'Pendapatan Tahunan',
                'value' => 115,
                'suffix' => 'M',
                'icon' => '<svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor"><path d="M10.75 10.5h5.5a.75.75 0 000-1.5h-5.5a.75.75 0 000 1.5z"/><path fill-rule="evenodd" d="M4 3.5A1.5 1.5 0 015.5 2h9A1.5 1.5 0 0116 3.5v13A1.5 1.5 0 0114.5 18h-9A1.5 1.5 0 014 16.5v-13zM5.5 3.5v13h9v-13h-9z" clip-rule="evenodd"/></svg>',
            ],
            [
                'label' => 'Karyawan Global',
                'value' => 450,
                'suffix' => '+',
                'icon' => '<svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor"><path d="M13 7a3 3 0 11-6 0 3 3 0 016 0z"/><path fill-rule="evenodd" d="M10 11a6 6 0 00-6 6 .75.75 0 001.5 0 4.5 4.5 0 019 0 .75.75 0 001.5 0 6 6 0 00-6-6z" clip-rule="evenodd"/></svg>',
            ],
            [
                'label' => 'Kota',
                'value' => 10,
                'suffix' => '+',
                'icon' => '<svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M9.69 18.933a.75.75 0 01-.638-.352l-3.84-6.144a6.5 6.5 0 1110.976 0l-3.84 6.144a.75.75 0 01-.638.352zm.31-8.433a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/></svg>',
            ],
            [
                'label' => 'Mitra',
                'value' => 20,
                'suffix' => '+',
                'icon' => '<svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M6 5.5A2.5 2.5 0 118.5 8 2.5 2.5 0 016 5.5zM11.5 11a3 3 0 00-2.994 2.824L8.5 14v2.25a.75.75 0 001.5 0V14a1.5 1.5 0 011.356-1.493L11.5 12.5h2a1.5 1.5 0 011.493 1.356L15 14v2.25a.75.75 0 001.5 0V14a3 3 0 00-3-3h-2z" clip-rule="evenodd"/><path d="M12 5.5a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"/></svg>',
            ],
        ];

        $aboutHighlights = [
            ['title' => 'Tata Kelola', 'desc' => 'Keputusan terukur & transparan'],
            ['title' => 'Efisiensi', 'desc' => 'Operasional gesit & berdampak'],
            ['title' => 'Kolaborasi', 'desc' => 'Kemitraan strategis jangka panjang'],
        ];

        $coreValues = [
            [
                'title' => 'Visi Strategis',
                'desc' => 'Fokus jangka panjang berbasis data dan eksekusi.',
                'icon' => '<svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 3a7 7 0 100 14 7 7 0 000-14zm1 7.414V6a1 1 0 10-2 0v5a1 1 0 00.293.707l3 3a1 1 0 001.414-1.414l-2.707-2.707z" clip-rule="evenodd"/></svg>',
            ],
            [
                'title' => 'Inovasi Utama',
                'desc' => 'Membangun solusi relevan untuk kebutuhan pasar.',
                'icon' => '<svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor"><path d="M11 2a1 1 0 00-2 0v1.05a6.5 6.5 0 00-3.784 11.6l.739.74a1 1 0 00.707.29h6.676a1 1 0 00.707-.29l.739-.74A6.5 6.5 0 0011 3.05V2z"/><path d="M8 18a1 1 0 001 1h2a1 1 0 001-1v-1H8v1z"/></svg>',
            ],
            [
                'title' => 'Integritas & Kepercayaan',
                'desc' => 'Menjaga kualitas dengan standar etika tinggi.',
                'icon' => '<svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 2a5 5 0 00-5 5v3.086l-.707.707A1 1 0 005 12.5V16a2 2 0 002 2h6a2 2 0 002-2v-3.5a1 1 0 00.293-.707L15 10.086V7a5 5 0 00-5-5zm-3 8V7a3 3 0 016 0v3H7z" clip-rule="evenodd"/></svg>',
            ],
            [
                'title' => 'Pertumbuhan Berkelanjutan',
                'desc' => 'Mendorong profit sekaligus dampak positif.',
                'icon' => '<svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M3 3.75A.75.75 0 013.75 3h4.5a.75.75 0 010 1.5H5.56l3.97 3.97 2.72-2.72a.75.75 0 011.06 0l3.19 3.19V7.75a.75.75 0 011.5 0v4.5a.75.75 0 01-.75.75h-4.5a.75.75 0 010-1.5h2.69l-2.72-2.72-2.72 2.72a.75.75 0 01-1.06 0L4.5 5.56V8.25a.75.75 0 01-1.5 0v-4.5z" clip-rule="evenodd"/></svg>',
            ],
        ];

        $sustainabilityPoints = [
            'Efisiensi sumber daya dan pengelolaan risiko operasional',
            'Kepatuhan dan tata kelola yang kuat di seluruh unit bisnis',
            'Inisiatif sosial dan peningkatan kapabilitas SDM',
        ];

        return view('pages.home', [
            'heroImageUrl' => $hero?->image ? asset('storage/' . $hero->image) : null,
            'heroSubtitle' => $hero?->description,
            'aboutTitle' => $about?->title,
            'aboutContent' => $about?->content,
            'aboutImageUrl' => $about?->image ? asset('storage/' . $about->image) : null,
            'stats' => $stats,
            'aboutHighlights' => $aboutHighlights,
            'companies' => $companies,
            'coreValues' => $coreValues,
            'sustainabilityPoints' => $sustainabilityPoints,
            'sustainabilityImageUrl' => null,
            'activities' => $activities,
            'careers' => $careers,
        ]);
    }
}
