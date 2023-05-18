<?php

namespace App\Http\Controllers\Front\Abudhabi;

use App\Http\Controllers\Controller;
use App\Models\Page;

class IndexController extends Controller
{
    public function index()
    {
        app()->setLocale('en');
        return view('front.abudhabi.index', [
            'page' => Page::find(5)
        ]);
    }
}
