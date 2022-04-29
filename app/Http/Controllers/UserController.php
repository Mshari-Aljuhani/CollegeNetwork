<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function upload(Request $request)
    {
        if($request->hasFile('profilePic')){
            $filename = $request->profilePic->getClientOriginalName();
            $request->profilePic->storeAs('profilePic',$filename,'public');
            Auth()->user()->update(['profilePic'=>$filename]);
        }
        return redirect()->back()->with('status','Avatar updated successfully');
    }

    public function update(Request $request){
        $user = Auth::user();

        $user->update($request->except('password'));
        $user->update();
        return redirect()->back()->with('status','Profile updated Successfully');
    }

    public function passwordUpdate(Request $request){
        $request->validate([
            'current_password' => 'required|min:4|max:100',
            'new_password' => 'required|min:4|max:100',
            'confirm_password' => 'required|same:new_password',
        ]);

        $user = Auth::user();
        if(Hash::check($request->current_password, $user->password)){
            $user->update([
                'password'=>bcrypt($request->new_password)
            ]);
            return redirect()->back()->with('status','Password updated successfully');
        }else{
            return redirect()->back()->with('error','current password does not match');
        }
    }
}
