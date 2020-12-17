<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function registerLogin(Request $request){
        // dd($request->name);
        // $users = DB::select('select * from users');
        // $password = Hash::make($request->password);
        foreach (User::all() as $user) {
            if($request->name === $user->name && Hash::check($request->password, $user->password)){
                return view('menu');
            } else {
                return back()->withErrors([
                     ["le mot de passe ou le nom d'utilisateurs incorrect"]
                ]);
            }
        }
    }


}


