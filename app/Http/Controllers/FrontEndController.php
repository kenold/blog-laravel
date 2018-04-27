<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting, App\Category, App\Post, DB;

class FrontEndController extends Controller
{
    public function index()
    {        
        return view('index')
                    ->with('title', Setting::first()->site_name)
                    ->with('categories', Category::take(5)->get())
                    ->with('featured_post', Post::orderBy('created_at', 'desc')->first())
                    ->with('second_post', Post::orderBy('created_at', 'desc')->skip(1)->take(1)->get()->first())
                    ->with('third_post', Post::orderBy('created_at', 'desc')->skip(2)->take(1)->get()->first())
                    ->with('news', Category::find(4))
                    ->with('videos', Category::find(2))
                    ->with('settings', Setting::first());
    }
}
