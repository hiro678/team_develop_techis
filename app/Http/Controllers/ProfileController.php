<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use stdClass;

class ProfileController extends Controller

{
    public function index()
    {
        return view('profile.profile', ['user' => Auth::user()]);
    }
    /**
     * ユーザー情報編集画面を表示
     * 
     * 
     */
     public function edit($id)
    {
       return view('profile.edit', ['user' => Auth::user()]);

    }
     /**
     * ユーザー情報編集
     * 
     * 
     */
     public function update(Request $request)
     {
        // dd($request);
        $user = User::where('id', '=', $request->id)->first();
        // dd($user);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return redirect('/profile')->with('flash_message', 'ユーザー情報を編集しました');

     }
    
}
