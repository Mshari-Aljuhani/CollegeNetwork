<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('show');
    }
    //For single image
    public function upload_image($post, $image){
        $imageName = $post->user->name . '-image-' . time() . rand(1, 100) . '.' . $image->extension();
        $image->storeAs('postPics',$imageName,'public');
        Image::create([
            'post_id' => $post->id,
            'imageName' => $imageName
        ]);
    }
    //For multi image
    public function uploadImgs($request, $post){
        if ($request->has('images')) {
            foreach ($request->file('images') as $image) {
                $this->upload_image($post, $image);
            }
        }
    }

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
    public function store(Request $request ){
        $user = Auth::user();
        $post = $user->posts()->create($request->all());
        $this->uploadImgs($request, $post);
        $post->save();
        return redirect()->back();
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Post $post)
    {
        if (Auth::id() != $post->user->id) {
            return abort(401);
        }
        $post->update(['message' => $request->message]);
        return redirect()->back()->with('status', 'Post updated successfully');
    }

    public function updateImage(Request $request)
    {
        if (Auth::id() != $request->user_id) {
            return abort(401);
        }

        $image = Image::findOrFail($request->image_id);
        $newImage = $request->file('updateImage');
        $destination = 'uploads/posts_pics/'.$image->name;

        Storage::delete($destination);
        File::delete($destination);

        if ($request->has('updateImage')) {
        $imageName = '-image-' . time() . '.' . rand(1, 100) .  $newImage->extension();
        $newImage->storeAs('postPics',$imageName,'public');
        $image->update(['imageName' => $imageName]);
        return redirect()->back()->with('status', 'Photo updated successfully');
        } else {
            $image->delete();
            return redirect()->back()->with('status', 'The image Deleted successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request, $post)
    {
        if (Auth::id() != $request->user_id) {
            return abort(401);
        }
        $post = Post::findOrFail($post);
        if($post->images->count() > 0){
            foreach($post->images as $image){
                $destination = 'uploads/posts_pics/'.$image->name;
                Storage::delete($destination);
                File::delete($destination);
                $image->delete();
            }
        }
        $post->delete();
        return redirect()->back()->with('status', 'Post Deleted successfully');
    }
}
