<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\Models\Role;

class AuthController extends Controller
{
    public function getRegister()
    {
        return view('register');
    }

    public function postRegister(RegisterRequest $request)
    {
        $role=Role::all();
        try{
            $user=User::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
            ]);
            $user->roles()->attach(3);
            return redirect('/thanks');
        }catch (\Throwable $th) {
            return redirect('/register');
        }
    }

    public function getLogin()
    {
        return view('login');
    }

    public function postLogin(LoginRequest $request)
    {
        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
            return redirect('/');
        } else {
            return redirect('/login')->with('message','メールアドレスまたはパスワードが正しくありません');
        }
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect("/login");
    }

    public function thanks(){
        return view('/thanks');
    }
}
