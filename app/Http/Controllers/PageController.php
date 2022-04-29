<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function welcome()
    {
     $posts = Post::all()->sortDesc();
     return view('welcome', compact('posts'));
    }
}
