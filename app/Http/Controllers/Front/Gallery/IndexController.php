<?php

namespace App\Http\Controllers\Front\Gallery;

use App\Http\Controllers\Controller;
use App\Models\Page;

class IndexController extends Controller
{
    public function index()
    {
        app()->setLocale('en');
        return view('front.gallery.index', [
            'page' => Page::find(2)
        ]);
    }
}
