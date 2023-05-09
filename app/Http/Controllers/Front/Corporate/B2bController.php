<?php

namespace App\Http\Controllers\Front\Corporate;

use App\Http\Controllers\Controller;
use App\Models\Page;

class B2bController extends Controller
{
    public function index()
    {
        app()->setLocale('en');
        return view('front.corporate.b2b.index', [
            'page' => Page::find(3)
        ]);
    }
}
