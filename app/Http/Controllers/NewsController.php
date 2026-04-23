<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::latest()->paginate(10);
        return view('admin.news.index', compact('news'));
    }

    public function frontendIndex(Request $request)
    {
        $search = $request->get('search');
        
        // Ambil berita terbaru untuk featured section
        $latestNews = News::where('is_active', true)->latest()->first();
        
        // Ambil berita lainnya (kecuali yang sudah jadi featured)
        $query = News::where('is_active', true)
                    ->where('id', '!=', $latestNews?->id);
        
        // Jika ada pencarian, filter berdasarkan judul dan konten
        if ($search) {
            $query->where(function($q) use ($search) {
                $q->where('title', 'like', '%' . $search . '%')
                  ->orWhere('excerpt', 'like', '%' . $search . '%')
                  ->orWhere('content', 'like', '%' . $search . '%');
            });
        }
        
        $otherNews = $query->latest()->paginate(8);
        
        return view('pages.news', compact('latestNews', 'otherNews', 'search'));
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'nullable|string',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // slug otomatis
        $data['slug'] = Str::slug($data['title']) . '-' . time();

        // default aktif
        $data['is_active'] = true;

        // upload gambar
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('news', 'public');
        }

        News::create($data);

        return redirect()->route('admin.news')
            ->with('success', 'Berita berhasil ditambahkan');
    }

    public function edit(News $news)
    {
        return view('admin.news.edit', compact('news'));
    }

    public function update(Request $request, News $news)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'nullable|string',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'is_active' => 'nullable|boolean',
        ]);

        // update slug (opsional: bisa dihapus kalau tidak mau berubah)
        $data['slug'] = Str::slug($data['title']) . '-' . time();

        // status aktif / tidak
        $data['is_active'] = $request->has('is_active');

        // update gambar kalau ada
        if ($request->hasFile('image')) {

            // hapus gambar lama (biar tidak numpuk)
            if ($news->image && Storage::disk('public')->exists($news->image)) {
                Storage::disk('public')->delete($news->image);
            }

            $data['image'] = $request->file('image')->store('news', 'public');
        }

        $news->update($data);

        return redirect()->route('admin.news')
            ->with('success', 'Berita berhasil diupdate');
    }

    public function show($slug)
    {
        $news = News::where('slug', $slug)->firstOrFail();
        return view('pages.news-detail', compact('news'));
    }

    public function destroy(News $news)
    {
        // hapus gambar juga
        if ($news->image && Storage::disk('public')->exists($news->image)) {
            Storage::disk('public')->delete($news->image);
        }

        $news->delete();

        return back()->with('success', 'Berita berhasil dihapus');
    }
}