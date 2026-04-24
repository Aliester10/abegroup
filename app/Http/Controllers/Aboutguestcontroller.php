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
        $about = About::latest()->first();
        
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
            
        $visimisi = \App\Models\VisiMisi::first();
        $companyValues = \App\Models\CompanyValue::all();

        return view('pages.about', [
            'about'     => $about,
            'partners'  => $partners,
            'timelines' => $timelines,
            'visimisi'  => $visimisi,
            'companyValues' => $companyValues
        ]);
    }
}       