<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\Prefecture;
use App\Models\Genre;

class ShopController extends Controller
{
    public function index(){
        $prefectures=Prefecture::all();
        $genres=Genre::all();
        $shops=Shop::with('prefecture','genre')->get();
        return view('shop_all',compact('prefectures','genres','shops'));
    }

    public function heart(){
        
    }
}
