<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller {

    public function __construct()
    {
        // CONSTRUTOR
    }

    public function viewLogin() {
        try {
            return view('system.auth.login');

        } catch (Exception $e) {
            dd($e);
            return redirect('/erro-500');
        }
    }

    public function storeLogin(Request $request) {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        $credentials = $request->only('email', 'password');
        $authenticated = Auth::attempt($credentials);

        if(!$authenticated){
            return redirect()->route('auth.login')->withErrors(['error' => 'E-mail or password invalid!']);
        }

        return redirect()->route('system.home');
    }

    public function logout() {
        try {
            Auth::logout();

        } catch (Exception $e) {
            dd($e);
            return redirect('/erro-500');
        }
    }

    
    public function viewSignup() {
        try {
            return view('system.auth.register');

        } catch (Exception $e) {
            dd($e);
            return redirect('/erro-500');
        }
    }


    public function storeSignup(Request $request) {
        try {
            $request->validate([
                'name' => 'required|string',
                'email' => 'required|email|unique:users',
                'password' => 'required',
            ]);
    
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
    
            auth()->login($user);
    
            return redirect()->route('system.home');

        } catch (Exception $e) {
            dd($e);
            return redirect('/erro-500');
        }
    }

    


}
