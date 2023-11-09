<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function member(){
        return view('menu1');
    }

    public function nonMember(){
        return view('menu2');
    }
}
