<?php

namespace App\Http\Controllers;

use App\Models\Activity;

class NewsController extends Controller
{
    public function index()
    {
        $activities = Activity::query()
            ->where('is_active', true)
            ->orderByDesc('date')
            ->orderByDesc('id')
            ->paginate(12);

        return view('pages.news', compact('activities'));
    }

    public function show($id)
    {
        $activity = Activity::findOrFail($id);
        return view('pages.news-detail', compact('activity'));
    }
}
