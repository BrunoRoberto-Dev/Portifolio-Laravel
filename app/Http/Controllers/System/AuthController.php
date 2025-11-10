<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        // TROCAR PARA ROTA DO SISTEMA
        return redirect()->route('home.view');
    }







    public function viewSignup() {
        try {
            return view('system.auth.register');

        } catch (Exception $e) {
            dd($e);
            return redirect('/erro-500');
        }
    }

    


}
