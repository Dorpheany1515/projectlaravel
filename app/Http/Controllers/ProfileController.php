<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function edit()
    {
        return view('profile.edit', ['user' => Auth::user()]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'profile' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $user = Auth::user();

        if(($request->hasFile('profile'))){
            $file=$request->file('profile');
            $filename=date('ymdhis').'_'.$file->getClientOriginalName();
            $file->move('images',$filename);
            $input['profile']=url('images/'.$filename);

        }
        $user->save();

        return redirect()->route('profile.edit')->with('success', 'Profile updated successfully');
    }
}
