<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('pages.auth.register');
    }


    public function register(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => 'required|string|min:8',
            'password_confirmation' => 'required|string',
            'tipeakun' => 'string|required'
        ]);

        if ($request->password != $request->password_confirmation) {
            session()->flash('error', 'Password dan konfirmasi harus sama');
            return;
        }

        $newUser =  User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'tipeakun' => $request->tipeakun
        ]);

        Auth::login($newUser);
        return redirect()->route('landing.home');
    }
}
