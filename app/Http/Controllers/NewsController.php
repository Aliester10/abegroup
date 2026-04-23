<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');
        $category = $request->get('category');
        
        // Ambil berita terbaru untuk featured section
        $latestNews = News::where('is_active', true)->latest()->first();
        
        // Ambil berita lainnya (kecuali yang sudah jadi featured)
        $query = News::where('is_active', true);
        
        if ($latestNews) {
            $query->where('id', '!=', $latestNews->id);
        }
        
        // Filter berdasarkan kategori
        if ($category) {
            $query->where('category', $category);
        }
        
        // Jika ada pencarian, filter berdasarkan judul dan konten
        if ($search) {
            $query->where(function($q) use ($search) {
                $q->where('title', 'like', '%' . $search . '%')
                  ->orWhere('excerpt', 'like', '%' . $search . '%')
                  ->orWhere('content', 'like', '%' . $search . '%');
            });
        }
        
        $otherNews = $query->latest()->paginate(9)->withQueryString();
        
        // Daftar kategori untuk tab
        $categories = News::CATEGORIES;
        
        return view('pages.news', compact('latestNews', 'otherNews', 'search', 'category', 'categories'));
    }

    public function show($slug)
    {
        // Cari berita berdasarkan slug dan harus aktif
        $news = News::where('slug', $slug)->where('is_active', true)->firstOrFail();
        return view('pages.news-detail', compact('news'));
    }
}