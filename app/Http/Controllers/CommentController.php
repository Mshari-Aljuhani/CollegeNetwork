<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        Comment::create([
           'comment_txt'=>$request->comment_txt,
            'user_id'=>$request->user_id,
            'post_id'=>$request->post_id,
        ]);
        return redirect()->back()->with('status', 'Comment published successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Comment $comment)
    {
        if (Auth::id() != $comment->user_id && Auth::user()->isAdmin = false) {
            return abort(401);
        }
        if($request){
            $comment->update(['comment_txt'=>$request->comment_txt]);
            return redirect()->back()->with('status', 'Comment updated successfully');
        }else{
            $comment->destroy();
            return redirect()->back()->with('status', 'Comment Deleted successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Comment $comment)
    {
        if (Auth::id() != $comment->user_id && Auth::user()->isAdmin = false) {
            return abort(401);
        }
        $comment = Comment::findOrFail($comment);
        $comment->delete();
        return redirect()->back()->with('status', 'Comment Deleted successfully');
    }
}
