<?php

namespace App\Http\Controllers\Front\Terms;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        app()->setLocale('en');
        return view('front.terms.index', [
            'page' => Page::find(4)
        ]);
    }
}
