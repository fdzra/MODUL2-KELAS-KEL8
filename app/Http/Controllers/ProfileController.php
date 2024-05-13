<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function index()
    {
        $user = DB::table('users')->where('user_id', '1')->first();
        return view('profile', compact('user'));
    }

    public function update(Request $request)
    {
        DB::table('users')->where('user_id', '1')->update([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'address' => $request->input('address'),
            'contact' => $request->input('contact'),
            'password' => $request->input('password'),
        ]);

        return redirect()->back()->with('success', 'Profile updated successfully');
    }

    public function photo(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time() . '.' . $request->photo->extension();

        $request->photo->move(public_path('images'), $imageName);

        DB::table('users')->where('user_id', '1')->update([
            'photo' => $imageName
        ]);

        return back()
            ->with('success', 'You have successfully upload image.')
            ->with('image', $imageName);
    }
}
