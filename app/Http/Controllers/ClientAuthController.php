<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientAuthController extends Controller
{
    public function connexion(){
        return view('user.login');
    }
    public function connexioncheck(Request $req){
        $credentials = $req->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::guard('client')->attempt($credentials)) {
            $req->session()->regenerate();

            return redirect('/');
        }
        return back()->withErrors([
            'email' => 'Votre email ou mot de passe est inccorect.',
        ]);
    }
    public function inscrire(){
        return view('user.logup');
    }
}
