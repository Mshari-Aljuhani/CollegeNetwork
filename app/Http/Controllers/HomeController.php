<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function upload(Request $request)
    {
        if($request->hasFile('profilePic')){
            $filename = $request->profilePic->getClientOriginalName();
            $request->profilePic->storeAs('profilePic',$filename,'public');
            Auth()->user()->update(['profilePic'=>$filename]);
        }
        return redirect()->back();
    }

    public function profilePage(){
        $user = Auth::user();
        return view('pages/profile', compact('user'));
    }

}
