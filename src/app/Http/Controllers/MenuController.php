<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    public function menu(){
        if(Auth::user()){
            return view('menu1');
        }else{
        return view('menu2');
        }
    }
}