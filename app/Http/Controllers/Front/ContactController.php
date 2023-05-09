<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Page;

class ContactController extends Controller
{
    public function index ()
    {
        app()->setLocale('en');
        return view('front.contact.index', [
            'page' => Page::find(1)
        ]);
    }
}
