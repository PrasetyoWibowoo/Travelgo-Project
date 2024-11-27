<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Userl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email|max:255|unique:userls', // Pastikan nama tabel sesuai
            'password' => 'required|string|min:8|confirmed',
        ]);

        Userl::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);


        return redirect()->route('home')->with('success', 'Registration successful.');
    }

    public function showRegistrationForm()
{
    return view('auth.register');
}

}
