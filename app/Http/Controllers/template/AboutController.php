<?php

namespace App\Http\Controllers\template;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Support\Facades\Validator;

class AboutController extends Controller
{
    public function index()
    {
        return view('layouts.about');
    }
    public function service()
    {
        return view('layouts.pages.service1');
    }
    public function servicetwo()
    {
        return view('layouts.pages.service2');
    }
    public function store(Request $request)
    {
       if(Auth::check()){

        $validate = Validator::make($request->all(),[

            'comment' => 'requird|string'
        ]);

        if($validate->fails()){
            redirect()->back()->with('message','Comment area is mandetory');
        }

        $post = Post::where('slug',$request->post_slug)->where('status','0')->first();
        if($post){

            Comment::create([

               
        'post_id'=> $post->id,
        'user_id'=> Auth::user()->id,
        'comment'=> $request->content
            ]);

        }else{
           return redirect()->back()->with('message','No Such post Found');
        }

       }else{
        return redirect()->back()->with('message','Login first to comment');
       }
    }
}
