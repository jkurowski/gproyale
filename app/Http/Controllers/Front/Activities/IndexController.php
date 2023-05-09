<?php

namespace App\Http\Controllers\Front\Activities;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        app()->setLocale('en');
        return view('front.activities.index', [
            'page' => Page::find(3)
        ]);
    }
}
