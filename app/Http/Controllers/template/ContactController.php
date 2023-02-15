<?php

namespace App\Http\Controllers\template;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('frontend.layout.contact');
    }

    public function saas()
    {
        return view('frontend.layout.home.sass');
    }

    public function saas2()
    {
        return view('frontend.layout.home.sass');
    }
}
