<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function create()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'sussiness' => 'required',
            'photo' => 'required|mimes:jpg,png,jpeg:size:max2048'
        ]);

        // dd($request);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'sussiness' => floatval($request->sussiness),
        ]);
        
        $path = Storage::put('public/images', $request->photo);
        $user->photo_url = url(Storage::url($path));
        $user->save();

        return redirect('/login');
    }
}
