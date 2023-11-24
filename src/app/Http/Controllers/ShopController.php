<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\Prefecture;
use App\Models\Genre;
use App\Models\Nice;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use DB;

class ShopController extends Controller
{
    public function index(Shop $shop,Request $request){
        $user=Auth::user();
        $prefectures=Prefecture::all();
        $genres=Genre::all();
        $shops=Shop::with('prefecture','genre')->get();
        return view('shop_all',compact('prefectures','genres','shops','user'));
    }

    public function search(Shop $shop,Request $request){
        $user=Auth::user();
        $prefectures=Prefecture::all();
        $genres=Genre::all();
        $shops=Shop::with('prefecture','genre')->PrefectureSearch($request->prefecture_id)->GenreSearch($request->genre_id)->KeywordSearch($request->keyword)->get();
        return view('shop_all',compact('prefectures','genres','shops','user'));
    }
}
