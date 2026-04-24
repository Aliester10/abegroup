<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Timeline;
use App\Models\Partner; 
use Illuminate\Http\Request;

class AboutguestController extends Controller
{
    public function index()
    {
        // 1. Mengambil satu data About terbaru
        $about = About::latest()->first();
        
        // 2. Mengambil data Partner yang aktif
        $partners = Partner::query()
            ->where('is_active', true)
            ->orderBy('order')
            ->orderByDesc('id')
            ->get();

        // 3. Mengambil data Timeline yang aktif
        $timelines = Timeline::query()
            ->where('is_active', true)
            ->orderBy('order')
            ->get();

        // 4. Kirim SEMUA variabel ke view
        return view('pages.about', [
            'about'     => $about,
            'partners'  => $partners,  // Ini yang tadi kurang
            'timelines' => $timelines
        ]);
    }
}