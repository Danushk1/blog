<?php

namespace App\Http\Controllers\template;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class blogController extends Controller
{
    public function index()
    {
        return view('layouts.blog.blog');
    }
    public function blogwithfilter()
    {
        return view('layouts.blog.blog_with_filter');
    }
    public function blogclassic()
    {
        return view('layouts.blog.classic');
    }
}
