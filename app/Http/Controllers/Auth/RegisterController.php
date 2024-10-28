<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Contracts\Service\Attribute\Required;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // dd(request()->all());
        $request->validate([
            'name'=> 'required|string',
            'email'=> 'required|string|unique:users',
            'password'=>'required|string|confirmed',
            'password_confirmation'=>'required|string',
        ]);

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
        ]);
        // return to_route('login');
        return redirect()->route('login'); //redirect()->route(route_name)
    }
}