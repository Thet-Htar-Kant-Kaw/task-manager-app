<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $credentials = $request->validate([
            'email'=> 'required|string',
            'password'=>'required|string',
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('tasks');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    /**
 * Log the user out of the application.
 */
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }

    // public function store(Request $request)
    // {
    //     if (Auth::attempt($request->validated())) {
    //         return redirect()->intended('/tasks');
    //     }

    //     return back()
    //     ->withInput($request->only('email'))
    //     ->withErrors([
    //         'email' => 'The provided credentials do not match our records.',
    // ]);
    // }
}
