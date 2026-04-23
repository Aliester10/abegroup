<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\CompanyHighlight;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function index()
    {
        $businesses = Business::query()
            ->where('is_active', true)
            ->orderBy('order')
            ->orderByDesc('id')
            ->get();

        $highlight = CompanyHighlight::latest()->first();
        $testimonials = Testimonial::latest()->get();

        return view('pages.business', compact('businesses', 'highlight', 'testimonials'));
    }

    // Method baru untuk detail unit bisnis
    public function show($slug)
    {
        $business = Business::where('slug', $slug)->where('is_active', true)->firstOrFail();
        return view('pages.detail-business', compact('business'));
    }
}
