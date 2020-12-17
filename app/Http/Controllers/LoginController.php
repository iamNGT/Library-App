<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{


    public function index()
    {
        return view('index');
    }

    public function registerLogin(Request $request){
        // dd($request->all(),User::all());
        // foreach (User::all() as $user) {
        //     if($request->name === $user->name && Hash::check($request->password, $user->password)){
        //         $request->session()->regenerate();
        //         return redirect()->intended('menu');
        //     }
        //         return back()->withErrors([
        //             'msg' => " mot de passe ou nom d'utilisateur incorrect"
        //         ]);
        // }

        $credentials = $request->only('name', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('menu');
        }

        return back()->withErrors([
            'msg' => " mot de passe ou nom d'utilisateur incorrect"
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

}


