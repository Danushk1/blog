<?php

namespace App\Http\Controllers\template;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
class ContactController extends Controller
{
    public function index(Request $request)
    {
        $posts=Post::all();
       
        return view('layouts.contact')->with('posts',$posts);;
    }

    public function saas()
    {
        return view('layouts.home.sass');
    }

    public function saas2()
    {
        return view('layouts.home.sass');
    }

    public function indexapp()
    {
        return view('layouts.home.index_app');
    }

    public function agency()
    {
        return view('layouts.home.agency');
    }

    public function agencytwo()
    {
        return view('layouts.home.agency2');
    }

    public function analytics()
    {
        return view('layouts.home.analytics');
    }
}
