<?php

namespace App\Http\Controllers\template;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class blogController extends Controller
{
    public function index()
    {
        return view('frontend.layout.blog.blog');
    }
    public function blogwithfilter()
    {
        return view('frontend.layout.blog.blog_with_filter');
    }
}
