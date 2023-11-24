<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Nice;
use App\Models\Shop;

class NiceController extends Controller
{
    public function nice(Shop $shop){
        $user=Auth::user();
        $create=Nice::create([
            'shop_id'=>$shop->id,
            'user_id'=>Auth::user()->id,
        ]);
        return back();
    }

    public function unNice($id){
        $shop=Shop::find($id);
        $user=Auth::user()->id;
        $nice=Nice::where('shop_id',$id)->where('user_id',$user)->first();
        $nice->delete();
        return back();
    }
}
