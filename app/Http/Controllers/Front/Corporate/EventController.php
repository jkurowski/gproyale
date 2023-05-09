<?php

namespace App\Http\Controllers\Front\Corporate;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        app()->setLocale('en');
        return view('front.corporate.event.index', [
            'page' => Page::find(3)
        ]);
    }
}
