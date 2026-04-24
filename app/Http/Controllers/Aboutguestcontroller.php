<?php


namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;


class AboutguestController extends Controller
{
    public function index()
    {
        $about = About::latest()->first();

        return view('pages.about', compact('about'));
    }
}