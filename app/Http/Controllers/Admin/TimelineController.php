<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Timeline;
use Illuminate\Http\Request;

class TimelineController extends Controller
{
    public function index()
    {
        $timelines = Timeline::orderBy('order')->get();
        return view('admin.timelines.index', compact('timelines'));
    }

    public function create()
    {
        // Auto-generate next order
        $nextOrder = Timeline::max('order') + 1;
        
        // Auto-suggest position (alternate between left and right)
        $lastTimeline = Timeline::orderBy('order', 'desc')->first();
        $suggestedPosition = $lastTimeline ? ($lastTimeline->position === 'left' ? 'right' : 'left') : 'left';
        
        // Auto-suggest theme (alternate between blue and orange)
        $blueCount = Timeline::where('theme', 'blue')->count();
        $orangeCount = Timeline::where('theme', 'orange')->count();
        $suggestedTheme = $blueCount <= $orangeCount ? 'blue' : 'orange';
        
        return view('admin.timelines.create', compact('nextOrder', 'suggestedPosition', 'suggestedTheme'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'year' => 'required|string|max:4',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'label' => 'nullable|string|max:50',
            'position' => 'required|in:left,right',
            'theme' => 'required|in:blue,orange',
            'tags' => 'nullable|string',
            'is_active' => 'boolean',
            'order' => 'integer',
        ]);

        // Process tags - convert comma-separated string to array
        if (!empty($validated['tags'])) {
            $validated['tags'] = array_map('trim', explode(',', $validated['tags']));
            // Remove empty tags
            $validated['tags'] = array_filter($validated['tags'], function($tag) {
                return !empty($tag);
            });
            // Re-index array
            $validated['tags'] = array_values($validated['tags']);
        } else {
            $validated['tags'] = [];
        }

        Timeline::create($validated);

        return redirect()->route('admin.timelines.index')
            ->with('success', 'Timeline item created successfully.');
    }

    public function edit(Timeline $timeline)
    {
        return view('admin.timelines.edit', compact('timeline'));
    }

    public function update(Request $request, Timeline $timeline)
    {
        $validated = $request->validate([
            'year' => 'required|string|max:4',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'label' => 'nullable|string|max:50',
            'position' => 'required|in:left,right',
            'theme' => 'required|in:blue,orange',
            'tags' => 'nullable|string',
            'is_active' => 'boolean',
            'order' => 'integer',
        ]);

        // Process tags - convert comma-separated string to array
        if (!empty($validated['tags'])) {
            $validated['tags'] = array_map('trim', explode(',', $validated['tags']));
            // Remove empty tags
            $validated['tags'] = array_filter($validated['tags'], function($tag) {
                return !empty($tag);
            });
            // Re-index array
            $validated['tags'] = array_values($validated['tags']);
        } else {
            $validated['tags'] = [];
        }

        $timeline->update($validated);

        return redirect()->route('admin.timelines.index')
            ->with('success', 'Timeline item updated successfully.');
    }

    public function destroy(Timeline $timeline)
    {
        $timeline->delete();

        return redirect()->route('admin.timelines.index')
            ->with('success', 'Timeline item deleted successfully.');
    }
}
