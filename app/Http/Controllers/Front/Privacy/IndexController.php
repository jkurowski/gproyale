<?php

namespace App\Http\Controllers\Front\Privacy;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        app()->setLocale('en');
        return view('front.privacy.index', [
            'page' => Page::find(3)
        ]);
    }
}
