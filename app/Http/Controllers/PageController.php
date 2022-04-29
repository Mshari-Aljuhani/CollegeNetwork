<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome()
    {
     $posts = Post::all()->sortDesc();
     return view('welcome', compact('posts'));
    }
    public function index(){

        return view(view: 'pages/index');
    }
}
