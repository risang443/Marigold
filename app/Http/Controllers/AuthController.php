<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Log;


class AuthController extends Controller
{
    // Menampilkan halaman login
    public function showLogin()
    {
        return view('landing.auth.login');
    }

    // Proses login
    public function login(Request $request)
    {
        // try{
        //     $request->validate([
        //         'username' => 'required|string',
        //         'password' => 'required|string',
        //     ]);
    
        //     $credentials = $request->only('username', 'password');
    
        //     if (Auth::attempt($credentials)) {
        //         $request->session()->regenerate();
        //         // return redirect()->intended('/dashboard')->with('success', 'Login successful');
        //         // dd("ISO KOK COK");
        //         dd(Auth::attempt($credentials));

        //     }
    
        //     return back()->withErrors([
        //         'username' => 'The provided credentials do not match our records.',
        //     ])->onlyInput('username');
        // }catch(\Exception $e){
        //     dd($e);
        // }



        try {
            $request->validate([
                'username' => 'required|string',
                'password' => 'required|string',
            ]);
    
            $credentials = $request->only('username', 'password');
    
            if (Auth::attempt($credentials)) {
                // Regenerate session to prevent session fixation attacks
                $request->session()->regenerate();
    
                if (Auth::check()) {
                    return redirect('/dashboard')->with('success', 'Login successful');
                    // dd("KONTOL");
                } else {
                    dd('Authentication successful but session not persisting.');
                }
            }
    
            return back()->withErrors([
                'username' => 'The provided credentials do not match our records.',
            ])->onlyInput('username');
        } catch (\Exception $e) {
            // Log the exception for debugging purposes
            Log::error('Login error: ' . $e->getMessage());
    
            // Redirect back to login with an error message
            return back()->withErrors([
                'general' => 'An error occurred during login. Please try again later.',
            ])->onlyInput('username');
        }
    }

    // Menampilkan halaman register
    public function showRegister()
    {
        return view('landing.auth.register');
    }

    // Proses register
    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|string|unique:users,username',
            'password' => 'required|string|min:6|confirmed',
            'email' => 'required|string|email|unique:users,email',
        ]);

        User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => 'user', // default role
            'email' => $request->email,
            'active' => 1, // default active
        ]);

        return redirect('/login')->with('success', 'Registration successful! Please login.');
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login')->with('success', 'You have been logged out.');
    }

    public function username()
{
    return 'username';
}
}
