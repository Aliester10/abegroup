<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function notFound()
    {
        return view('pages.404');
    }

    public function blank()
    {
        return view('pages.blank');
    }
}
